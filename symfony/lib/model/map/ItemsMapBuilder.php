<?php


/**
 * This class adds structure of 'items' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sat May 29 00:26:27 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ItemsMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ItemsMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(ItemsPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ItemsPeer::TABLE_NAME);
		$tMap->setPhpName('Items');
		$tMap->setClassname('Items');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11);

		$tMap->addColumn('CATALOG_ID', 'CatalogId', 'INTEGER', false, 11);

		$tMap->addColumn('CITY_ID', 'CityId', 'INTEGER', false, 11);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', false, 255);

		$tMap->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 255);

		$tMap->addColumn('PHOTO', 'Photo', 'VARCHAR', false, 255);

		$tMap->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 4);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

		$tMap->addColumn('ORD', 'Ord', 'VARCHAR', false, 255);

		$tMap->addColumn('FIO', 'Fio', 'VARCHAR', false, 255);

		$tMap->addColumn('PHONE', 'Phone', 'VARCHAR', false, 255);

		$tMap->addColumn('ADDRESS', 'Address', 'VARCHAR', false, 255);

		$tMap->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255);

		$tMap->addColumn('ITEM_ID', 'ItemId', 'INTEGER', false, 11);

		$tMap->addColumn('IS_SALE', 'IsSale', 'TINYINT', true, 4);

	} // doBuild()

} // ItemsMapBuilder
