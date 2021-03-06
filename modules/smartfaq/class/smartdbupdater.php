<?php

/**
 * Detemines if a table exists in the current db
 *
 * @param string $table the table name (without XOOPS prefix)
 * @return bool True if table exists, false if not
 *
 * @author xhelp development team
 */
function smart_TableExists($table)
{
    $bRetVal = false;

    //Verifies that a MySQL table exists

    $xoopsDB = XoopsDatabaseFactory::getDatabaseConnection();

    $realname = $xoopsDB->prefix($table);

    $ret = mysql_list_tables(XOOPS_DB_NAME, $xoopsDB->conn);

    while (list($m_table) = $xoopsDB->fetchRow($ret)) {
        if ($m_table == $realname) {
            $bRetVal = true;

            break;
        }
    }

    $xoopsDB->freeRecordSet($ret);

    return ($bRetVal);
}

/**
 * Contains the classes for updating database tables
 *
 * @license GNU
 * @author marcan <marcan@smartfactory.ca>
 * @version $Id: smartdbupdater.php,v 1.2 2006/09/29 18:49:10 malanciault Exp $
 * @link http://www.smartfactory.ca The SmartFactory
 */

/**
 * SmartDbTable class
 *
 * Information about an individual table
 *
 * @author marcan <marcan@smartfactory.ca>
 * @link http://www.smartfactory.ca The SmartFactory
 */
if (!defined('XOOPS_ROOT_PATH')) {
    die('XOOPS root path not defined');
}

/**
 * Include the language constants for the SmartObjectDBUpdater
 */
global $xoopsConfig;
$common_file = XOOPS_ROOT_PATH . '/modules/smartfaq/language/' . $xoopsConfig['language'] . '/smartdbupdater.php';
if (!file_exists($common_file)) {
    $common_file = XOOPS_ROOT_PATH . '/modules/smartfaq/language/english/smartdbupdater.php';
}

include $common_file;

class SmartDbTable
{
    /**
     * @var string name of the table
     */

    public $_name;

    /**
     * @var string structure of the table
     */

    public $_structure;

    /**
     * @var array containing valued of each records to be added
     */

    public $_data;

    /**
     * @var array containing fields to be altered
     */

    public $_alteredFields;

    /**
     * @var array containing new fields to be added
     */

    public $_newFields;

    /**
     * @var array containing fields to be droped
     */

    public $_dropedFields;

    /**
     * @var array flag table to drop it
     */

    public $_flagForDrop = false;

    /**
     * @var array containing fields which values will be updated
     */

    public $_updatedFields;

    /**
     * @var array containing fields which values will be updated
     */    //felix

    public $_updatedWhere;

    /**
     * Constructor
     *
     * @param string $name name of the table
     */
    public function __construct($name)
    {
        $this->_name = $name;

        $this->_data = [];
    }

    /**
     * Return the table name, prefixed with site table prefix
     *
     * @return string table name
     */
    public function name()
    {
        global $xoopsDB;

        return $xoopsDB->prefix($this->_name);
    }

    /**
     * Checks if the table already exists in the database
     *
     * @return bool TRUE if it exists, FALSE if not
     */
    public function exists()
    {
        return smart_TableExists($this->_name);
    }

    public function getExistingFieldsArray()
    {
        global $xoopsDB;

        $result = $xoopsDB->query('SHOW COLUMNS FROM ' . $this->name());

        while (false !== ($existing_field = $xoopsDB->fetchArray($result))) {
            $fields[$existing_field['Field']] = $existing_field['Type'];

            if ('YES' != $existing_field['Null']) {
                $fields[$existing_field['Field']] .= ' NOT NULL';
            }

            if ($existing_field['Extra']) {
                $fields[$existing_field['Field']] .= ' ' . $existing_field['Extra'];
            }
        }

        return $fields;
    }

    public function fieldExists($field)
    {
        $existingFields = $this->getExistingFieldsArray();

        return isset($existingFields[$field]);
    }

    /**
     * Set the table structure
     *
     * @param  string $structure table structure
     */
    public function setStructure($structure)
    {
        $this->_structure = $structure;
    }

    /**
     * Return the table structure
     *
     * @return string table structure
     */
    public function getStructure()
    {
        return sprintf($this->_structure, $this->name());
    }

    /**
     * Add values of a record to be added
     *
     * @param string $data values of a record
     */
    public function setData($data)
    {
        $this->_data[] = $data;
    }

    /**
     * Get the data array
     *
     * @return array containing the records values to be added
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Use to insert data in a table
     *
     * @return bool true if success, false if an error occured
     */
    public function addData()
    {
        global $xoopsDB;

        foreach ($this->getData() as $data) {
            $query = sprintf('INSERT INTO %s VALUES (%s)', $this->name(), $data);

            $ret = $xoopsDB->query($query);

            if (!$ret) {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_ADD_DATA_ERR, $this->name()) . '<br>';
            } else {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_ADD_DATA, $this->name()) . '<br>';
            }
        }

        return $ret;
    }

    /**
     * Add a field to be added
     *
     * @param string $name name of the field
     * @param string $properties properties of the field
     * @param mixed $showerror
     */
    public function addAlteredField($name, $properties, $showerror = true)
    {
        $field['name'] = $name;

        $field['properties'] = $properties;

        $field['showerror'] = $showerror;

        $this->_alteredFields[] = $field;
    }

    /**
     * Invert values 0 to 1 and 1 to 0
     *
     * @param string $name name of the field
     * @param mixed $newValue
     * @param mixed $oldValue
     */    //felix

    public function addUpdatedWhere($name, $newValue, $oldValue)
    {
        $field['name'] = $name;

        $field['value'] = $newValue;

        $field['where'] = $oldValue;

        $this->_updatedWhere[] = $field;
    }

    /**
     * Add new field of a record to be added
     *
     * @param string $name name of the field
     * @param string $properties properties of the field
     */
    public function addNewField($name, $properties)
    {
        $field['name'] = $name;

        $field['properties'] = $properties;

        $this->_newFields[] = $field;
    }

    /**
     * Get fields that need to be altered
     *
     * @return array fields that need to be altered
     */
    public function getAlteredFields()
    {
        return $this->_alteredFields;
    }

    /**
     * Add field for which the value will be updated
     *
     * @param string $name name of the field
     * @param string $value value to be set
     */
    public function addUpdatedField($name, $value)
    {
        $field['name'] = $name;

        $field['value'] = $value;

        $this->_updatedFields[] = $field;
    }

    /**
     * Get new fields to be added
     *
     * @return array fields to be added
     */
    public function getNewFields()
    {
        return $this->_newFields;
    }

    /**
     * Get fields which values need to be updated
     *
     * @return array fields which values need to be updated
     */
    public function getUpdatedFields()
    {
        return $this->_updatedFields;
    }

    /**
     * Get fields which values need to be updated
     *
     * @return array fields which values need to be updated
     */    //felix

    public function getUpdatedWhere()
    {
        return $this->_updatedWhere;
    }

    /**
     * Add values of a record to be added
     *
     * @param string $name name of the field
     */
    public function addDropedField($name)
    {
        $this->_dropedFields[] = $name;
    }

    /**
     * Get fields that need to be droped
     *
     * @return array fields that need to be droped
     */
    public function getDropedFields()
    {
        return $this->_dropedFields;
    }

    /**
     * Set the flag to drop the table
     */
    public function setFlagForDrop()
    {
        $this->_flagForDrop = true;
    }

    /**
     * Use to create a table
     *
     * @return bool true if success, false if an error occured
     */
    public function createTable()
    {
        global $xoopsDB;

        $query = $this->getStructure();

        $ret = $xoopsDB->query($query);

        if (!$ret) {
            echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_CREATE_TABLE_ERR, $this->name()) . '<br>';
        } else {
            echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_CREATE_TABLE, $this->name()) . '<br>';
        }

        return $ret;
    }

    /**
     * Use to drop a table
     *
     * @return bool true if success, false if an error occured
     */
    public function dropTable()
    {
        global $xoopsDB;

        $query = sprintf('DROP TABLE %s', $this->name());

        $ret = $xoopsDB->query($query);

        if (!$ret) {
            echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_DROP_TABLE_ERR, $this->name()) . '<br>';

            return false;
        }

        echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_DROP_TABLE, $this->name()) . '<br>';

        return true;
    }

    /**
     * Use to alter a table
     *
     * @return bool true if success, false if an error occured
     */
    public function alterTable()
    {
        global $xoopsDB;

        $ret = true;

        foreach ($this->getAlteredFields() as $alteredField) {
            $query = sprintf('ALTER TABLE `%s` CHANGE `%s` %s', $this->name(), $alteredField['name'], $alteredField['properties']);

            //echo $query;

            $ret = $ret && $xoopsDB->query($query);

            if ($alteredField['showerror']) {
                if (!$ret) {
                    echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_CHGFIELD_ERR, $alteredField['name'], $this->name()) . '<br>';
                } else {
                    echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_CHGFIELD, $alteredField['name'], $this->name()) . '<br>';
                }
            }
        }

        return $ret;
    }

    /**
     * Use to add new fileds in the table
     *
     * @return bool true if success, false if an error occured
     */
    public function addNewFields()
    {
        global $xoopsDB;

        $ret = true;

        foreach ($this->getNewFields() as $newField) {
            $query = sprintf('ALTER TABLE `%s` ADD `%s` %s', $this->name(), $newField['name'], $newField['properties']);

            //echo $query;

            $ret = $ret && $xoopsDB->query($query);

            if (!$ret) {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_NEWFIELD_ERR, $newField['name'], $this->name()) . '<br>';
            } else {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_NEWFIELD, $newField['name'], $this->name()) . '<br>';
            }
        }

        return $ret;
    }

    /**
     * Use to update fields values
     *
     * @return bool true if success, false if an error occured
     */
    public function updateFieldsValues()
    {
        global $xoopsDB;

        $ret = true;

        foreach ($this->getUpdatedFields() as $updatedField) {
            $query = sprintf('UPDATE %s SET %s = %s', $this->name(), $updatedField['name'], $updatedField['value']);

            $ret = $ret && $xoopsDB->query($query);

            if (!$ret) {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_UPDATE_TABLE_ERR, $this->name()) . '<br>';
            } else {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_UPDATE_TABLE, $this->name()) . '<br>';
            }
        }

        return $ret;
    }

    /**
     * Use to update fields values
     *
     * @return bool true if success, false if an error occured
     */        //felix

    public function updateWhereValues()
    {
        global $xoopsDB;

        $ret = true;

        foreach ($this->getUpdatedWhere() as $updatedWhere) {
            $query = sprintf('UPDATE %s SET %s = %s WHERE %s  %s', $this->name(), $updatedWhere['name'], $updatedWhere['value'], $updatedWhere['name'], $updatedWhere['where']);

            //echo $query."<br>";

            $ret = $ret && $xoopsDB->query($query);

            if (!$ret) {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_UPDATE_TABLE_ERR, $this->name()) . '<br>';
            } else {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_UPDATE_TABLE, $this->name()) . '<br>';
            }
        }

        return $ret;
    }

    /**
     * Use to drop fields
     *
     * @return bool true if success, false if an error occured
     */
    public function dropFields()
    {
        global $xoopsDB;

        $ret = true;

        foreach ($this->getDropedFields() as $dropedField) {
            $query = sprintf('ALTER TABLE %s DROP %s', $this->name(), $dropedField);

            $ret = $ret && $xoopsDB->query($query);

            if (!$ret) {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_DROPFIELD_ERR, $dropedField, $this->name()) . '<br>';
            } else {
                echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_DROPFIELD, $dropedField, $this->name()) . '<br>';
            }
        }

        return $ret;
    }
}

/**
 * SmartobjectDbupdater class
 *
 * Class performing the database update for the module
 *
 * @author marcan <marcan@smartfactory.ca>
 * @link http://www.smartfactory.ca The SmartFactory
 */
class SmartobjectDbupdater
{
    public function __construct()
    {
    }

    /**
     * Use to execute a general query
     *
     * @param string $query query that will be executed
     * @param string $goodmsg message displayed on success
     * @param string $badmsg message displayed on error
     *
     * @return bool true if success, false if an error occured
     */
    public function runQuery($query, $goodmsg, $badmsg)
    {
        global $xoopsDB;

        $ret = $xoopsDB->query($query);

        if (!$ret) {
            echo "&nbsp;&nbsp;$badmsg<br>";

            return false;
        }

        echo "&nbsp;&nbsp;$goodmsg<br>";

        return true;
    }

    /**
     * Use to rename a table
     *
     * @param string $from name of the table to rename
     * @param string $to new name of the renamed table
     *
     * @return bool true if success, false if an error occured
     */
    public function renameTable($from, $to)
    {
        global $xoopsDB;

        $from = $xoopsDB->prefix($from);

        $to = $xoopsDB->prefix($to);

        $query = sprintf('ALTER TABLE %s RENAME %s', $from, $to);

        $ret = $xoopsDB->query($query);

        if (!$ret) {
            echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_RENAME_TABLE_ERR, $from) . '<br>';

            return false;
        }

        echo '&nbsp;&nbsp;' . sprintf(_SDU_MSG_RENAME_TABLE, $from, $to) . '<br>';

        return true;
    }

    /**
     * Use to update a table
     *
     * @param object $table {@link SmartDbTable} that will be updated
     *
     * @see SmartDbTable
     *
     * @return bool true if success, false if an error occured
     */
    public function updateTable($table)
    {
        global $xoopsDB;

        $ret = true;

        // If table has a structure, create the table

        if ($table->getStructure()) {
            $ret = $table->createTable() && $ret;
        }

        // If table is flag for drop, drop it

        if ($table->_flagForDrop) {
            $ret = $table->dropTable() && $ret;
        }

        // If table has data, insert it

        if ($table->getData()) {
            $ret = $table->addData() && $ret;
        }

        // If table has new fields to be added, add them

        if ($table->getNewFields()) {
            $ret = $table->addNewFields() && $ret;
        }

        // If table has altered field, alter the table

        if ($table->getAlteredFields()) {
            $ret = $table->alterTable() && $ret;
        }

        // If table has updated field values, update the table

        if ($table->getUpdatedFields()) {
            $ret = $table->updateFieldsValues($table) && $ret;
        }

        // If table has droped field, alter the table

        if ($table->getDropedFields()) {
            $ret = $table->dropFields($table) && $ret;
        }

        //felix

        // If table has updated field values, update the table

        if ($table->getUpdatedWhere()) {
            $ret = $table->UpdateWhereValues($table) && $ret;
        }

        return $ret;
    }
}
