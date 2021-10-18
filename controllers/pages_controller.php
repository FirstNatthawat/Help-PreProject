<?php
	class PagesController{
		public function home(){
            $userList = user::getAll();
            $positionList = position:: getAll();

		}

        public function login()
        {
            session_start();
            if (isset($_POST['username'])) {
                //connection
                include("connection_connect.php");
                //รับค่า user & password
                $username = $_POST['username'];
                $password = $_POST['password'];
                //query

                $sql = "SELECT * FROM user INNER JOIN
     position ON user.position_id =position.position_id  Where username='" . $username . "' and password='" . $password . "' ";
                $result = mysqli_query($conn, $sql);

                // echo (string)$sql;
                // echo mysqli_num_rows($result);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result);
                    //  print_r($row);

                    $_SESSION["user_id"] = $row["user_id"];
                    $_SESSION["user_full_name"] = $row["user_name"] . " " . $row["user_surname"];
                    $_SESSION["position_id"] = $row["position_id"];
                    //print_r($row["position_id"]);

                    if ($_SESSION["position_id"] == "admin") { //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: admin_page.php");

                    }
                    else if ($_SESSION["position_id"] == "borrower") { //ถ้าเป็น borrower ให้กระโดดไปหน้า borrower_page.php
                        Header("Location: borrower_page.php");
                    }
                    else if ($_SESSION["position_id"] == "student") { //ถ้าเป็น student ให้กระโดดไปหน้า student_page.php
                        Header("Location:student_page.php");
                    }
                    else if ($_SESSION["position_id"] == "teacher") { //ถ้าเป็น teacher ให้กระโดดไปหน้า teacher_page.php
                        Header("Location: teacher_page.php");
                    }
                } else {
                    echo "<script>";
                    echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
                    echo "window.history.back()";
                    echo "</script>";

                }

            }
        }
	}
?>