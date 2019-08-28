<?php 
require_once('koneksi.php');
mysqli_select_db($link,"forge");
$output = '';

if(isset($_POST['delete'])){
    $id = $_POST['deleteid'];
    $q = "DELETE from interns where id = '$id'";
    mysqli_query($link,$q);
    $output .= '<h4>Data has been deleted</h4>';
    echo $output;
}

if(isset($_POST['query'])){
    $search = mysqli_real_escape_string($link,$_POST['query']);
    $q = "SELECT * from interns where name like '%".$_POST["query"]."%' OR email like '%".$search."%'";
    
}else{
    $q = "SELECT * from interns";
}

$res = mysqli_query($link,$q);
if(mysqli_num_rows($res) > 0){
        $output .= '<div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>University</th>
                                    <th>Phone</th>
                                    <th>Intern Degree</th>
                                    <th>Intern Position</th>
                                    <th>Date</th>
                                    <th>Field Study</th>
                                    <th>Letter</th>
                                    <th>Resume</th>
                                    <th>Linked In</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>';
        while($row = mysqli_fetch_array($res)){
            $output .= '<tr id="row">
                            <td class="idnum" id="idnum" value='.$row['id'].'>'.$row["id"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["university"].'</td>
                            <td>'.$row["phone"].'</td>
                            <td>'.$row["interndegree"].'</td>
                            <td>'.$row["internpos"].'</td>
                            <td>'.$row["startDate"].' - '.$row["endDate"].'</td>
                            <td>'.$row["fieldstudy"].'</td>
                            <td><a href="https://'.$row["letter"].'" target="_blank">'.$row["letter"].'</a></td>
                            <td><a href="https://'.$row["resume"].'"  target="_blank">'.$row["resume"].'</a></td>
                            <td><a href='.$row["linkedin"].'  target="_blank">'.$row["linkedin"].'</a></td>
                            <td>
                                <select name="status" class="status">
                                    <option value="">'.$row['status'].'</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Interviewed">Interviewed</option>
                                </select>
                            </td>
                            <td> 
                                <form method="post" action="editint.php?id='.$row["id"].'">
                                    <input type="hidden" value='.$row['id'].' name="editid">
                                    <button type="submit" class="btn btn-warning edit">Edit</button>
                                </form>
                                <form method="GET" action="delete-intern.php?id='.$row["id"].'">
                                    <input type="hidden" value='.$row["id"].' name="id">
                                    <button type="submit" class="btn btn-danger del" name="delete">Delete</button>
                                 </form>
                            </td>
                        </tr>';
        }
        echo $output;
    }else{
        echo "There's no data to show!";
    }
    ?>
    <script>
    $(document).ready(function(){
        $('.status').change(function(){
            id = $(this).parent().parent().find('.idnum').text();
            status = this.value;
            $.ajax({
                url:'ajaxstatus.php',
                method:'POST',
                data:
                {
                    status:status,
                    id:id
                },
                success:function(data){
                    $('#result').html(data);
                },
                error:function(err,status){
                    console.log(err);
                }
            });
        });
    });
    
    </script>