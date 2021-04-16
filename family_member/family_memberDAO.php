<?php
class Family_MemberDAO {
  function getFamilyMemberByUserId($user_id){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT family_member_id, user_id, family_member_name, family_member_color FROM family_member WHERE user_id =" . $user_id;
    $result = $conn->query($sql);

    $familyMembers = [];
    $index = 0;

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $family_member = new family_member();

            $family_member->setFamilyMemberId($row["family_member_id"]);
            $family_member->setUserId($row["user_id"]);
            $family_member->setFamilyMemberName($row["family_member_name"]);
            $family_member->setFamilyMemberColor($row["family_member_color"]);
            $familyMembers[$index] = $family_member;
            $index++;
        }
    }
    $conn->close();
    return $familyMembers;
  }

  function createFamilyMember($family_member, $user_id){
    require_once('./utilities/connection.php');

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO team4project.family_member (`family_member_name`,
    `user_id`,
    `family_member_color`) VALUES (?, ?, ?)");

    $name = $family_member->getFamilyMemberkName();
    $color = $family_member->getFamilyMemberkColor();
    $family_member->setUserId($user_id);


    $stmt->bind_param("sss", $name, $user_id, $color);
    $stmt->execute();
   
    $stmt->close();
    $conn->close();
    echo "Family Member Created";
  }

  function deleteFamilyMember($family_member_id, $user_id){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM team4projet.family_member WHERE family_member_id = " . $family_member_id . "AND user_id = " . $user_id .";";
    
    if($conn->query($sql) == TRUE){
        echo "Family Member Deleted";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
  
  function updateFamilyMember($family_member_id){
    require_once('./utlities/connection.php');
    require_once('./task/task/php');
    

    $sql = "UPDATE family_member_name, family_member_color FROM team4project.family_member WHERE family_member_id =" . $family_member_id;
    
    if($conn->query($sql) == TRUE){
        echo "Family Member Updated";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
}

  
}
?>