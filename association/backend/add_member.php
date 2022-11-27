<?php 
    // $main_url = 'association';
    // echo 'test'; die();
    $return = true;
    include('db.php');
    // echo $_FILES['image']['tmp_name']; die();
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $name= test_input($_POST['name']);
    $phone= test_input($_POST['phone']);
    $email= test_input($_POST['email']);
    $company_name= test_input($_POST['company_name']);
    $company_location= test_input($_POST['company_location']);
    $service= test_input($_POST['service']);
    $website_name= test_input($_POST['website_name']);
    $twitter= test_input($_POST['twitter']);
    $facebook= test_input($_POST['facebook']);
    $linkedin= test_input($_POST['linkedin']);
    $youtube= test_input($_POST['youtube']);
    // print_r($_FILES);
    $extention = explode('.',$_FILES['image']['name'])[sizeof(explode('.',$_FILES['image']['name']))-1];
    $logo_name = $company_name;
    $logo_name .= '.';
    $logo_name .= $extention;
    // echo "Your Profile Has Been Created"; die();
    // if(move_uploaded_file($_FILES['image']['tmp_name'],'../assets/members/'.$logo_name)){
        //     echo 'done image';
        // }
    $description= $_POST['description'];
    // $sql1 = "select * from `member_detail` where `company_name`='$company_name'";
    $sql1 = "select * from members_detail where company_name='$company_name' or phone='$phone'";
    $sql = $conn->query($sql1);
    // var_dump($sql); die();
    if($sql->num_rows) {
        // $return = false;
        // echo $phone;
        echo 'Your Profile is already Present';
        // echo "Your Profile is already Present";
        // return [$owner_phone,"Your Profile is already Present"];
        die();
    }
    // echo $sql->num_rows; die();
    move_uploaded_file($_FILES['image']['tmp_name'],'../assets/members/'.$logo_name);
        
    // $sql = "INSERT INTO members_detail (id,name,location,email,phone,twitter,logo,facebook,website,about,company_name,linkedin,youtube,service) VALUES (NULL, 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test' , 'test')";
    $sql = "insert into members_detail(id,name,location,email,phone,twitter,logo,facebook,website,about,company_name,linkedin,youtube,service) values(NULL, '$name' , '$company_location' , '$email' , '$phone' , '$twitter' , '$logo_name' , '$facebook' , '$website_name' , '$description' , '$company_name' , '$linkedin' , '$youtube' , '$service')";
    
    // $sql = "insert into members_detail(id,name,location,email,phone,twitter,logo,facebook,website,about,company_name,linkedin,youtube,service) values(NULL,$name, $company_location, $email, $phone, NULL, $logo_name, $facebook, $website_name, $description, $company_name, $linkedin, $youtube, $service)";
    // $sql = "INSERT INTO members_detail ('id','name', 'location', 'phone', 'email', 'company_name', 'website', 'twitter', 'facebook', 'linkedin', 'youtube', 'service', 'logo', 'about') VALUES ('NULL','$name', '$company_location', '$phone', '$email', '$company_name', '$website_name', '$facebook', '$linkedin', '$youtube', '$service', '$logo_name', '$description')";
    // $sql = `INSERT INTO members_detail (name, location, phone, email, company_name, website, twitter, facebook, linkedin, youtube, service, logo, about) VALUES ('.$name.', '.$company_location.', '.$phone.', '.$email.', '.$company_name.', '.$website_name.', '.$facebook.', '.$linkedin.', '.$youtube.', '.$service.', '.$logo_name.', '.$description.')`;
    // $sql = `insert into members_detail (id,name, location, phone, email, company_name, website, facebook, linkedin, youtube, service, logo, about) values('NULL','$name', '$company_location', '$phone', '$email', '$company_name', '$website_name', '$facebook', '$linkedin', '$youtube', '$service', '$logo_name', '$description')`;

    // VALUES ($name, $company_location, $phone, $email, $company_name, $website_name, $facebook, $linkedin, $youtube, $service, $logo_name, $description)`;
    $result = $conn->query($sql);
    // die();
    // if (mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    //   } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //   }
    // $result = mysqli_query($conn,$sql);
    if($result){
        // echo $phone;
        echo 'Your Profile Has Been Created';
    } 
    // echo $result;
    // $error = mysqli_error($conn->query($sql));
    // print("Error Occurred: ".$error); die();
    // // echo $result; die();
    // if($conn->query($sql)){
    //     echo 'done';
    // } else {
    //     echo $conn -> error;
    // }
    // var_dump(mysql_error()); die();
    // echo $result; die();
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
    // require("../vendor/autoload.php");
    
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    
    // $mail = new PHPMailer(true);
    
    // // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // try {
    // $mail->isSMTP();
    // $mail->SMTPAuth = true;
    
    // $mail->Host = "smtp.gmail.com";
    // // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->SMTPSecure = 'tls';
    // $mail->Port = 587;
    
    // $mail->Username = "prateek@wowevents.in";
    // $mail->Password = "pr@teek4";
    
    // $mail->setFrom('prateekpppp4@gmail.com', 'Prateek');
    // $mail->addAddress($admin_mail, $admin_name);
    // $mail->IsHTML(true);
    // $mail->Subject = 'Form Submitted on Website';
    // $mail->Body = 'Name:'.$name.'<br>Phone:'.$phone.'<br>Email: '.$email.'<br>Query:'.$query;
    
    // $mail->send();
    // // if($mail->send()){
    //     echo 'Submitted';
    // // } else {
    // // }
    // }
    // catch (Exception $e) {
    //      echo 'Something Went Wrong !';
    // }

?>