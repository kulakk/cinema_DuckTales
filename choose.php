<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>

<form method="post" enctype="multipart/form-data">
  <!-- informuje ze bede opisywal formularz przekazywany metoda POST i kodowany w sposob umożliwiajacy przesyłanie plików -->
<input name="nazwa" placeholder="nazwa przepisu"/><br/>
<!-- opisuje kontrolke wejscia danych ktore beda przekazane przez POST do pola tablicowego o takiej samej nazwie. dodaje wskazowke dla uzytkownika czeg o dotyczy kontrolka   -->
<textarea name="opis" placeholder="opis wykonania" ></textarea><br/>
<!-- textarea to specjalna kontrolka wejscia dla dluzszego dekstu wieloliniowego -->
<input type="file" name="zdjecie"><br/>
<!-- informuje o typie plikowym -->
<select name="trudnosc">
<option value="latwe" label="Łatwe">Łatwe</option>

<option value="srednio trudne" label="Średnio trudne">Średnio trudne</option>
<option value="trudne" label="Trudne">Trudne</option>
</select>
<!-- opisuje kontrolke wyboru z mozlliwymi opcjami, wartosc  z value opcji bedzie wartoscia pola tablicowego o nazwie kon



 </body>
 </html>