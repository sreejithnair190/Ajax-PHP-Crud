<?php
require_once "db.php";

$user = new Database();

if (isset($_POST["action"]) && $_POST["action"] == "view") {
    $output = "";
    $datas = $user->read();
    if ($user->totalRowCount()>0) {
        $output .= '<table class="table table-bordered table-sm">
                    <thead>
                        <th class="text-center">ID</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Last Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody>';
        foreach($datas as $data){
            $output .= '<tr class="text-secondary">
                            <td class="text-center">'.$data['id'].'</td>
                            <td class="text-center">'.$data['fname'].'</td>
                            <td class="text-center">'.$data['lname'].'</td>
                            <td class="text-center">'.$data['email'].'</td>
                            <td class="text-center">'.$data['phone'].'</td>
                            <td class="text-center">
                                <a href="#" id ="'.$data['id'].'" class="text-primary text-decoration-none infoBtn" title="View Details">
                                    <i class="fa fa-info-circle fa-lg"></i>
                                </a>
                                <a href="#" id ="'.$data['id'].'" class="text-success text-decoration-none editBtn" title="Update User Details" data-bs-toggle="modal" data-bs-target="#edit-modal">
                                    <i class="fa fa-edit fa-lg"></i>
                                </a>
                                <a href="#" id ="'.$data['id'].'" class="text-danger text-decoration-none deleteBtn" title="Delete User">
                                    <i class="fa fa-trash fa-lg"></i>
                                </a>
                            </td>
                        </tr>';
        }
        $output .= '</tbody></table>';
        echo $output;
    }else{
        $output .= "<h3 class='text-center text-secondary fw-bolder mt-5'>No user present in databse</h3>";
        echo $output;
    }
}

if (isset($_POST["action"]) && $_POST["action"] == "insert"){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user->insert($fname,$lname,$email,$phone);
}

if (isset($_POST['editId'])) {
    $id = $_POST['editId'];
    $data = $user->getUserById($id);
    echo json_encode($data);
}

if(isset($_POST["action"]) && $_POST["action"] == "edit"){
    $id = $_POST['edit-id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user->update($id, $fname, $lname, $email, $phone);

}

if(isset($_POST['deleteID'])){
    $id = $_POST['deleteID'];
    $user->delete($id);
}

if (isset($_POST['viewId'])) {
    $id = $_POST['viewId'];
    $row = $user->getUserById($id);
    echo json_encode($row);
}


?>