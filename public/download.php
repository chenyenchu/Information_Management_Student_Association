<?php
$connect = mysqli_connect('localhost', 'root', '12345678', 'fjuim');
if(isset($_POST['submit'])){
    $sql = "SELECT * FROM signup";
    $result = mysqli_query($connect, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "\xEF\xBB\xBF";
        $export .= '<table> 
            <tr> 
            <th>姓名</th>
            <th>學號</th> 
            <th>系級</th> 
            <th>電話</th> 
            <th>緊急聯絡人</th>
            <th>活動</th>
            <th>備註</th>
            </tr>';
        while($row = mysqli_fetch_array($result)){
            $export .= '
            <tr>
            <td>'.$row["SName"].'</td> 
            <td>'.$row["SID"].'</td> 
            <td>'.$row["SGrade"].'</td> 
            <td>'.$row["SPhone"].'</td> 
            <td>'.$row["Contant"].'</td>
            <td>'.$row["Activity"].'</td>
            <td>'.$row["Note"].'</td>
            </tr>';
        }
        $export .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=info.xls');
        echo $export;
    }
}
?>