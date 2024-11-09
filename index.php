<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            font-family: Arial, sans-serif;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("bg.webp");
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            filter: grayscale(100%) blur(5px);
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .main{
            height: 95%;
            width: 90%;
            padding: 10px;
        }

        .top{
            display: flex;
            justify-content: space-between;
            height: 50px;
            border: 2px;
            border-style: solid; 
            border-radius: 10px;
            border-color: white;
            margin-top: 10px;
            padding: 20px;
        }

        .top button{
            font-size: 30px;
            width: 250px;
            background-color: rgb(55, 55, 55);
            color: white;
            border-radius: 10px;
        }

        .top button:hover{
            background-color: white;
            color: black;
        }

        .lower{
            height: 71%;
            width: 100%;
            margin-top: 15px;
            margin-bottom: 10px;
            display: flex;
        }

        .left {
            height: 100%;
            width: 50%;
            padding: 10px;
            border: 2px;
            border-style: solid; 
            border-radius: 10px;
            border-color: white;
            margin: 10px;
        }

        .right{
            height: 100%;
            width: 50%;
            padding: 10px;
            border: 2px;
            border-style: solid; 
            border-radius: 10px;
            border-color: white;
            margin: 10px;
            overflow: auto;
        }

        .ins{
            color: white;
            font-size: 40px;
            margin-left: 40px;
            margin-bottom: 25px;
        }

        .ins input{
            height: 40px;
            width: 60%;
            border: 2px;
            border-style: solid;
            border-color: white;
            border-radius: 10px;
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
        }

        .ins #iName{
            margin-left: 70px;
        }

        .ins #iRoll{
            margin-left: 56px;
        }

        .ins #iClass{
            margin-left: 76px;
        }

        .ins #iMarks{
            margin-left: 66px;
        }

        .ins input:hover{
            background-color: black;
        }

        #insert h1{
            color: white;
            font-size: 50px;
            margin-left: 32%;
            margin-bottom: 20px;
            margin-top: 0px;
        }

        #insert #butI{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 40%;
            border-color: white;
            border-radius: 10px;
        }

        #insert #butI:hover{
            background-color: white;
            color: black;
        }

        #update #butI{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 40%;
            border-color: white;
            border-radius: 10px;
        }

        #update #butG{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 20px;
            border-color: white;
            border-radius: 10px;
        }

        #update #butI:hover{
            background-color: white;
            color: black;
        }
        
        #update #butG:hover{
            background-color: white;
            color: black;
        }

        #update h1{
            color: white;
            font-size: 50px;
            margin-left: 32%;
            margin-bottom: 10px;
            margin-top: 0px;
        }

        #update #iSearch{
            margin-left: 80px;
        }

        #delete #butI{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 40%;
            border-color: white;
            border-radius: 10px;
        }

        #delete #butG{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 20px;
            border-color: white;
            border-radius: 10px;
        }

        #delete #butI:hover{
            background-color: white;
            color: black;
        }
        
        #delete #butG:hover{
            background-color: white;
            color: black;
        }

        #delete h1{
            color: white;
            font-size: 50px;
            margin-left: 32%;
            margin-bottom: 10px;
            margin-top: 0px;
        }

        #delete #iSearch{
            margin-left: 80px;
        }

        #display #butI{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 40%;
            border-color: white;
            border-radius: 10px;
        }

        #display #butG{
            background-color: rgb(55, 55, 55);
            color: white;
            font-size: 25px;
            border: 2px;
            border-style: solid;
            margin-left: 20px;
            border-color: white;
            border-radius: 10px;
        }

        #display #butI:hover{
            background-color: white;
            color: black;
        }
        
        #display #butG:hover{
            background-color: white;
            color: black;
        }

        #display h1{
            color: white;
            font-size: 50px;
            margin-left: 32%;
            margin-bottom: 10px;
            margin-top: 0px;
        }

        #display #iSearch{
            margin-left: 80px;
        }


        .left .form-container h2{
            color: white;
        }

        .form-container {
            display: none;
        }
        .active {
            display: block;
        }

        .user{
            height: 50px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .user h1{
            color: white;
        }

        .user button{
            font-size: 30px;
            width: 150px;
            background-color: rgb(55, 55, 55);
            color: white;
            border-radius: 10px;
        }

        .user button:hover{
            background-color: white;
            color: black;
        }

        .right table{
            width: 95%;
            margin-left: 3%;
            justify-content: space-between;
            border: 2px;
        }

        .right table tr td{
            color: white;
            font-size: 20px;
            border-right: 2px;
            border-style: solid;
            border-color: white;
            text-align: center;
        }

    </style>

    <script>
        function showForm(formId) {
            const forms = document.querySelectorAll('.form-container');
            forms.forEach(form => form.classList.remove('active'));
            const selectedForm = document.getElementById(formId);
            selectedForm.classList.add('active');
            localStorage.setItem('activeForm', formId);
        }
        window.onload = function() {
            const savedFormId = localStorage.getItem('activeForm');
            if (savedFormId) {
                showForm(savedFormId);
            } else {
                const defaultFormId = 'insert';
                showForm(defaultFormId);
            }
        };
    </script>
</head>
<body>
    <?php
        $con_p = mysqli_connect('localhost','User_Pass','','user_passwords');
        $query = 'SELECT active FROM u_pass WHERE U_ID = 1';
        $result_user = mysqli_query($con_p, $query);
        $row = mysqli_fetch_assoc($result_user);
        $active = $row['active'];
        $user = "";
        $password = "";

        if($active == 1){
            $query = 'SELECT User, Password FROM u_pass WHERE U_ID = 1';
            $result_user = mysqli_query($con_p, $query);
            $row = mysqli_fetch_assoc($result_user);
            $user = $row['User'];
            $password = $row['Password'];
            mysqli_query($con_p,$query);
        } else{
            echo "<script language='javascript'> alert('Authentication Error Login Again'); 
            window.location.href = 'login.html'</script>";
        }

        try {
            $con_M = mysqli_connect('localhost', $user, $password, 'student_bca');
            echo "<div class='main'>";
            echo "<div class='user'>";
            echo "<h1>Welcome $user</h1>";
            echo "<form action='' method='POST'>";
            echo "<button type=submit>Logout</button>";
            echo "<input type='hidden' name='logout' value='1'>";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['logout'])) {
                    mysqli_query($con_p,'UPDATE u_pass SET active = 0 WHERE U_ID = 1');
                    mysqli_close($con_M);
                    mysqli_close($con_p);
                    echo "<script language='javascript'> alert('Successfully Logged Out'); 
                            window.location.href='login.html'</script>";
                }
            }
            echo "</form>";
            echo "</div>";
            echo "<div class='top'>";
            echo "<button id='bI' onclick=\"showForm('insert')\">Insert</button>";
            echo "<button id='bU' onclick=\"showForm('update')\">Update</button>";
            echo "<button id='bD' onclick=\"showForm('delete')\">Delete</button>";
            echo "<button id='bDis' onclick=\"showForm('display')\">Display</button>";
            echo "</div>";//top
            echo "<div class='lower'>";
            echo "<div class='left'>";
            //form for Insert
            echo "<div id='insert' class='form-container'>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='inputForm' value='1'>";
            echo "<h1>Insert Data</h1>";
            echo "<div class='ins'>";
            echo "Name: ";
            echo "<input type='text' placeholder='Enter Name' id='iName' name='insName' autocomplete='off' pattern='[A-Za-z\s]+' title='Only alphabets are allowed' required>";
            echo "</div>";//InsertName
            echo "<div class='ins'>";
            echo "RollNo: ";
            echo "<input type='number' placeholder='Enter RollNo' id='iRoll' name='insRoll' autocomplete='off'>";
            echo "</div>";//InsertRoll
            echo "<div class='ins'>";
            echo "Class: ";
            echo "<input type='text' placeholder='Enter Class' id='iClass' name='insClass'autocomplete='off' pattern='[A-Za-z\s1-9.]+' title='Only alphabets are allowed' required>";
            echo "</div>";//InsertName
            echo "<div class='ins'>";
            echo "Marks: ";
            echo "<input type='number' placeholder='Enter Marks' id='iMarks' min='0' max='100' step='0.1' name='insMarks'autocomplete='off'>";
            echo "</div>";//InsertMarks
            echo "<input type='submit' value='INSERT' id='butI'>";
            echo "</form>";
            echo "</div>";//Insert
            //PHP for Insert
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['inputForm'])) {
                    $name = $_POST['insName'];
                    $class = $_POST['insClass'];
                    $rollNo = $_POST['insRoll'];
                    $marks = $_POST['insMarks'];
                    if($rollNo == "" || $class == "" || $name == "" || $marks == ""){
                        echo "<script language='javascript'> alert('Please Enter All Details.');</script>";
                    } else{
                        if (strlen((string)$rollNo) > 4 || strlen((string)$rollNo) <= 1){
                            echo "<script language='javascript'> alert('Please Enter Correct RollNo.');</script>";
                        } else{
                            $query = "INSERT INTO student (name, class, rollNo, marks) VALUES ('$name', '$class', '$rollNo', '$marks')";
                            mysqli_query($con_M, $query);
                        }
                    }
                }
            }
            //Form for Update
            $valS = 1;
            echo "<div id='update' class='form-container'>";
            echo "<h1>Update Form</h1>";
            echo "<div class='ins'>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='searchu' value='$valS'>";
            echo "<input type='text' placeholder='Search By RollNo' autocomplete='off' name='searchStu' id='iSearch'>";
            echo "<button type='submit' id='butG'>Go</button>";
            echo "</form>";
            echo "</div>";
            //Code for Search
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['searchu'])) {
                    $rollu = $_REQUEST['searchStu'];
                    $query = "SELECT * FROM student where RollNo = $rollu";
                    if($query){
                        try{
                            $res = mysqli_query($con_M,$query);
                            $val = mysqli_fetch_array($res);
                            if($val != null){
                                $name = $val['Name'];
                                $rollNum = $val['RollNo'];
                                $class = $val['Class'];
                                $marks = $val['Marks'];
                                $valS = null;
                                echo "<form method='POST' action=''>";
                                echo "<input type='hidden' name='updateForm' value='1'>";
                                echo "<div class='ins'>";
                                echo "Name: ";
                                echo "<input type='text' placeholder='Name' id='iName' name='insName' value='$name' autocomplete='off' pattern='[A-Za-z\s]+' title='Only alphabets are allowed' required>";
                                echo "</div>";//UpdateName
                                echo "<div class='ins'>";
                                echo "RollNo: ";
                                echo "<input type='text' placeholder='RollNo' id='iRoll' name='insRoll' value='$rollNum' readonly>";
                                echo "</div>";//UpdateRoll
                                echo "<div class='ins'>";
                                echo "Class: ";
                                echo "<input type='text' placeholder='Class' id='iClass' name='insClass' value='$class' autocomplete='off' pattern='[A-Za-z\s1-9.]+' title='Only alphabets are allowed' required>";
                                echo "</div>";//UpdateName
                                echo "<div class='ins'>";
                                echo "Marks: ";
                                echo "<input type='text' placeholder='Marks' id='iMarks' name='insMarks' value='$marks' min='0' max='100' step='0.1' autocomplete='off' title='Only alphabets are allowed' required>";
                                echo "</div>";//UpdateMarks
                                echo "<input type='submit' value='UPDATE' id='butI'>";
                                echo "</form>";
                            } 
                            else{
                                echo "<script language='javascript'> alert('Invalid Roll Number');</script>";
                            }
                        } catch(exception $e){
                            echo "<script language='javascript'> alert('Please Enter Roll Number');</script>";
                        }
                    } 
                    else{
                        echo "<script language='javascript'> alert('No Student Found');</script>";
                    }
                }
            }
            //code for update
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['updateForm'])) {
                    $name = $_POST['insName'];
                    $class = $_POST['insClass'];
                    $rollNo = $_POST['insRoll'];
                    $marks = $_POST['insMarks'];
                        
                    $query = "UPDATE `student` SET `Name`='$name',`Class`='$class',`Marks`='$marks' WHERE RollNo = '$rollNo'";
                    mysqli_query($con_M, $query);
                }
            }
            echo "</div>";
            
            //code for delete
            $valD = 1;
            echo "<div id='delete' class='form-container'>";
            echo "<h1>Delete Form</h1>";
            echo "<div class='ins'>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='searchd' value='$valD'>";
            echo "<input type='text' placeholder='Search By RollNo' name='searchStuD' autocomplete='off' id='iSearch'>";
            echo "<button type='submit' id='butG'>Go</button>";
            echo "</form>";
            echo "</div>";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['searchd'])) {
                    $rollu = $_REQUEST['searchStuD'];
                    $query = "SELECT * FROM student where RollNo = $rollu";
                    if($query){
                        try{
                            $res = mysqli_query($con_M,$query);
                            $val = mysqli_fetch_array($res);
                            if($val != null){
                                $name = $val['Name'];
                                $rollNum = $val['RollNo'];
                                $class = $val['Class'];
                                $marks = $val['Marks'];
                                $valD = null;
                                echo "<form method='POST' action=''>";
                                echo "<input type='hidden' name='deleteForm' value='1'>";
                                echo "<div class='ins'>";
                                echo "Name: ";
                                echo "<input type='text' placeholder='Name' id='iName' name='insName' value='$name' readonly>";
                                echo "</div>";//DeleteName
                                echo "<div class='ins'>";
                                echo "RollNo: ";
                                echo "<input type='text' placeholder='RollNo' id='iRoll' name='insRoll' value='$rollNum' readonly>";
                                echo "</div>";//DeleteRoll
                                echo "<div class='ins'>";
                                echo "Class: ";
                                echo "<input type='text' placeholder='Class' id='iClass' name='insClass' value='$class' readonly>";
                                echo "</div>";//DeleteName
                                echo "<div class='ins'>";
                                echo "Marks: ";
                                echo "<input type='text' placeholder='Marks' id='iMarks' name='insMarks' value='$marks' readonly>";
                                echo "</div>";//DeleteMarks
                                echo "<input type='submit' value='DELETE' id='butI'>";
                                echo "</form>";
                            } 
                            else{
                                echo "<script language='javascript'> alert('Invalid Roll Number');</script>";
                            }
                        } catch(exception $e){
                            echo "<script language='javascript'> alert('Please Enter Roll Number');</script>";
                        }
                    } 
                    else{
                        echo "<script language='javascript'> alert('No Student Found');</script>";
                    }
                }
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['deleteForm'])){
                    $name = $_POST['insName'];
                    $class = $_POST['insClass'];
                    $rollNo = intval($_POST['insRoll']);
                    $marks = $_POST['insMarks'];
                    $query = "DELETE FROM student WHERE RollNo = '$rollNo'";
                    echo $rollNo;
                    mysqli_query($con_M, $query);
                }
            }
            echo "</div>";

            

            //From for Display
            $valDis = 1;
            echo "<div id='display' class='form-container'>";
            echo "<h1>Display Form</h1>";
            echo "<div class='ins'>";
            echo "<form method='POST' action=''>";
            echo "<input type='hidden' name='searchdis' value='$valDis'>";
            echo "<input type='text' placeholder='Search By RollNo' name='searchStuDis' id='iSearch' autocomplete='off'>";
            echo "<button type='submit' id='butG'>Go</button>";
            echo "</form>";
            echo "</div>";
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['searchdis'])) {
                    $rollu = $_REQUEST['searchStuDis'];
                    $query = "SELECT * FROM student where RollNo = $rollu";
                    if($query){
                        try{
                            $res = mysqli_query($con_M,$query);
                            $val = mysqli_fetch_array($res);
                            if($val != null){
                                $name = $val['Name'];
                                $rollNum = $val['RollNo'];
                                $class = $val['Class'];
                                $marks = $val['Marks'];
                                $valDis = null;
                                echo "<form method='POST' action=''>";
                                echo "<div class='ins'>";
                                echo "Name: ";
                                echo "<input type='text' placeholder='Name' id='iName' name='insName' value='$name' readonly>";
                                echo "</div>";//DisplayName
                                echo "<div class='ins'>";
                                echo "RollNo: ";
                                echo "<input type='text' placeholder='RollNo' id='iRoll' name='insRoll' value='$rollNum' readonly>";
                                echo "</div>";//DisplayRoll
                                echo "<div class='ins'>";
                                echo "Class: ";
                                echo "<input type='text' placeholder='Class' id='iClass' name='insClass' value='$class' readonly>";
                                echo "</div>";//DisplayName
                                echo "<div class='ins'>";
                                echo "Marks: ";
                                echo "<input type='text' placeholder='Marks' id='iMarks' name='insMarks' value='$marks' readonly>";
                                echo "</div>";//DisplayMarks
                                echo "<button type='submit' id='butI'>CLEAR</button>";
                                echo "</form>";
                            } 
                            else{
                                echo "<script language='javascript'> alert('Invalid Roll Number');</script>";
                            }
                        } catch(exception $e){
                            echo "<script language='javascript'> alert('Please Enter Roll Number');</script>";
                        }
                    } 
                    else{
                        echo "<script language='javascript'> alert('No Student Found');</script>";
                    }
                }
            }
            echo "</div>";//Display

            echo "</div>";//left
            
            echo "<div class='right'>";
            $query = "SELECT * from student";
            $result = mysqli_query($con_M, $query);
            $count = mysqli_num_rows($result);
            if($count > 0){
                echo "<table>";
                echo "<tr>";
                echo "<td>Name</td>";
                echo "<td>RollNo</td>";
                echo "<td>Class</td>";
                echo "<td>Marks</td>";
                echo "</tr>";
                while($rec = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$rec['Name']."</td>";
                    echo "<td>".$rec['RollNo']."</td>";
                    echo "<td>".$rec['Class']."</td>";
                    echo "<td>".$rec['Marks']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else{
                echo "<table>";
                echo "<tr>";
                echo "<td>Name</td>";
                echo "<td>RollNo</td>";
                echo "<td>Class</td>";
                echo "<td>Marks</td>";
                echo "</tr>";
                echo "</table>";
            }
            echo "</div>";//right
            echo "</div>"; //lower
            echo "</div>"; //main
        } catch (Exception $e) {
            echo "<script language='javascript'> alert('Error Entering Data'); 
                 window.location.href='index.php'</script>";
        }
    ?>
</body>
</html>