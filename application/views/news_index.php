<h1>Новости</h1>
<p>
<table>
    Самые актуальные новости!
    <tr>
        <td>Год</td>
        <td>Заголовок</td>
    </tr>
    <?php

    foreach ($data as $key => $row) {
        echo '<tr><td><a href="news/view/?id=' . $key . '">смотреть</a></td><td>' . $row['Year'] . '</td><td>' . $row['Title'] . '</td></tr>';
    }

    ?>
</table>
</p>