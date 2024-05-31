<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include "../../Model/connectdatabase.php";

    $conn = connectDatabaseNFT();

    $stmt = $conn->prepare("SELECT * FROM `user`");

    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $html = '';
    foreach ($users as $user){
        extract($user, EXTR_PREFIX_ALL, 'Users');
        $html .= '
        <tr class="AllUserShow">
            <th><span class="custom-checkbox">
            <input type="checkbox" id="checkbox1" name="option[]" value="1">
            <label for="checkbox1"></label></th>

            <div class="maintainval">
                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-usernameval">
                        '.$Users_username.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-pass">
                        '.$Users_Password.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-email">
                        '.$Users_Email.'
                    </div>
                </th>

                
                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-bank">
                        '.$Users_BankName.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-banum">
                        '.$Users_BankAccountNumber.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-avt">
                        '.$Users_AvatarImage.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-cv">
                        '.$Users_CoverImage.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:100px;" class="tagdiv-role">
                        '.$Users_Role.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:200px;" class="tagdiv-bio">
                        '.$Users_Bio.'
                    </div>
                </th>

                <th>
                    <div style="overflow: hidden;
                    text-overflow: ellipsis;
                    text-align: left;
                    white-space: nowrap;
                    width:50px;" class="tagdiv-id">
                        '.$Users_UserID.'
                    </div>
                </th>
            </div>

            <th>
                <a href="#editEmployeeModal" class="edit JohaneditUser" data-toggle="modal">
                    <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                </a>
                <a href="#deleteEmployeeModal" class="delete JohandelUser" data-toggle="modal">
                    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                </a>
            </th>
        </tr>'
        ;
    }

    echo $html;
?>
