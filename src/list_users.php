<Html:5>
    <?php require("../config/database.php");
    $sql_users="
        select u.firstname||' '||u.lastname as fullname,
u.email,
u.mobile_phone,
case 
	when u.status= true then 'Active' else 'Inactive'
	end as status,
	u.profile_photos
	from users u";
    ?>
<!DOCTYPE Html>
<body>
    <table border="1" align="center">
        <tr>
            <th>Fullname</th>
            <th>Email</th>
            <th>Mobile phone</th>
            <th>Status</th>
            <th>url_photo</th>
            <th>options</th>
        </tr>  
        <tr>
            <td>Peter loza</td>
            <td>peter@gmail.com</td>
            <td>300123</td>
            <td>Active</td>
            <td><img src="profile_photos/user_photo.png"
        
                    width="100" alt="User photo"></td> 
            <td>
                <a href="#">
                    <img src="icons/edit.png"
                        width="20" alt="Edit user">    
                        
</a>
&nbsp;&nbsp;
<a href="#">
    <img src="icons/delete.png"
        width="20" alt="Delete user">
</a>
</td>
</tr>
</table>           
                    

</body>        

</Html:5>