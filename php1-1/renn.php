<?php
class Company
{
	protected $name;

	protected $address;

	protected $tell;

	public function __construct($name, $address, $tell)
	{
		$this->name = $name;
		$this->address = $address;
		$this->tell = $tell;
	}
}

class Department extends Company
{

	private $departmentname;

	private $manager;

	public function __construct($departmentname, $manager)
	{
		$this->name = $departmentname;
		$this->address = $manager;
	}

}

$work = new Department();

$work->displayCompany('会社名');
$work->setAddress('住所');
$work->setTell('電話番号');
$work->displayDepartment('部署名');
$work->setManager('部長');

	$work = array(
		$work->getName() => ['サンプルA','サンプルB','サンプルC'],
		$work->getAddress() => ['市ヶ谷','池袋','新宿'],
		$work->getTell() => ['080-XXXX-XXXX','090-XXXX-XXXX','070-XXXX-XXXX'],
		$work->getCategory() => ['人事','総務','営業'],
		$work->getManager() => ['高田','田中','高橋']
	);

foreach ($work as $key => $value){
	echo $key.':'.$value[0]."\n";
}
foreach ($work as $key => $value){
	echo $key.':'.$value[1]."\n";
}
foreach ($work as $key => $value){
	echo $key.':'.$value[2]."\n";
}

?>