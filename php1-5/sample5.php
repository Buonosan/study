<?php
class Company{

	protected $name;

	protected $address;

	protected $tell;

	public function getName(){
		return $this->name;
	}

	public function getAddress(){
		return $this->address;
	}

	public function getTell(){
		return $this->tell;
	}
	
	public function displayCompany($name) {
		$this->name = $name;
		}

		public function setAddress($address) {
		$this->address = $address;
		}

		public function setTell($tell) {
			$this->tell = $tell;
		}
}

class Department extends Company
{
	private $departmentname;

	private $manager;

	public function getCategory()
	{
		return $this->departmentname;
	}

	public function getManager()
	{
		return $this->manager;
	}

	public function displayDepartment($departmentname)
	{
		$this->departmentname = $departmentname;
	}

	public function setManager($manager)
	{
		$this->manager = $manager;
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
echo "\n";
foreach ($work as $key => $value){
	echo $key.':'.$value[1]."\n";
}
echo "\n";
foreach ($work as $key => $value){
	echo $key.':'.$value[2]."\n";
}
?>