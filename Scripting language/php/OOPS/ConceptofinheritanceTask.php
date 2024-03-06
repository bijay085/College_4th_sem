<?php
class Employee
{
    protected $name, $address;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
}
;

class Permanent extends Employee
{
    protected $salary, $post;
    function __construct($name, $address)
    {
        parent::setName($name);
        parent::setAddress($address);
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function setPost($post)
    {
        $this->post = $post;
    }

    //displaying all 

    // var $display = function(){ };
    public function displayAll()
    {
        return ["name" => $this->name, "address" => $this->address, "salary" => $this->salary, "post" => $this->post];

    }
}

$item = new Permanent("Ram", "Ktm");
$item->setSalary(849873);
$item->setPost("Manager");

// $item2 = new Permanent("Hari", "NMC");
// $item2->setSalary(123426);
// $item2->setPost("Teacher");

$disArray = $item->displayAll();
echo "<pre>";
print_r($disArray);
echo "</pre>";

// $disArray2 = $item2->displayAll();
// echo "<pre>";
// print_r($disArray2);
// echo "</pre>";
?>

<!-- //in table -->
<table border=1 cellspacing=0 cellpadding=4>
    <thead>
        <tr>
            <th>S.N</th>
            <th>Employee</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Post</th>
        </tr>
    </thead>
    <tbody>
        <!-- #for single person multiple data  -->
        <tr>
            <td>1</td>
            <?php $i = 1;
            foreach ($disArray as $emp): ?>
                <td>
                    <?php echo $emp; ?>
                </td>
                <?php $i++; endforeach; ?>
        </tr>
        <!-- <tr>
            <td>2</td>
            <?php $i = 1;
            foreach ($disArray2 as $emp): ?>
                <td>
                    <?php echo $emp; ?>
                </td>
                <?php $i++; endforeach; ?>
        </tr> -->
    </tbody>
    <!-- for multiple perosn multiple data  -->
</table>

<?php 
// if CRUD

 class CRUD extends Permanent{

    //create method
    function create($id, $name, $salary,$address, $post){
        
    }

    //read method
    function read($id, $name, $salary,$address, $post){
        
    }

    //update method
    function update($id, $name, $salary,$address, $post){
        $sql = "UPDATE tbl_users SET name='$name', address='$address', salary='$salary', WHERE id=$uid;";
        
    }

    //delete method
    function delete($id, $name, $salary,$address, $post){
        $sql = "DELETE FROM tbl_users WHERE id='$uid' ";
        $res = mysqli_query($conn, $sql);
    }
    
};
