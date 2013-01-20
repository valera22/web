<?php 
        echo '<html>';
        echo '<head>';
        echo '<title>Заголовок страницы</title>';
	echo '<link rel="stylesheet" type="text/css" href="style.css">';
        echo '</head>';
        echo '<body>';
        echo '<table border="1" cellpadding="0" cellspacing="0" width="100%" height="100%">';
        echo '<tr>  <th colspan=2><img src="images/Mylogo.png"</th>  </tr>';
        echo '<tr>
                <td width="25%" height="100%" valign="top">
                <ul>
                        <li><a href="index.html" title="Ссылка">link</a></li>
                        <li><a href="index.html" title="Ссылка">link</a></li>
                        <li><a href="index.html" title="Ссылка">link</a></li>
                </ul>
                </td>
                <td width="75%" height="100%" valign="top">content</td>
              </tr>';
        echo '<tr> <td colspan=3 bgcolor="#fa8e47" height = "20%"> <span id="copyright">&copy "Фирма Рога и Копыта"</span> 
        	<br> <a href = "http://ru.wikipedia.org/wiki/Рога_и_копыта"> О нас </a> &nbsp &nbsp <a href = "http://www.apple.com"> Apple </a> 
                <br> <a href = "http://www.google.ru/"> Google </a> &nbsp &nbsp <a href ="http://www.yandex.ru/"> Yandex </a>
	        </td> </tr>';
        echo '</table>';
?>

