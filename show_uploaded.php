<?php

require_once "directory.php";//$target_dir - dolarami bodajże są oznaczane zmienne w php-ie!

$files = scandir($target_dir); // Ogarnąć skąd się tu te funkcje pobrały! - scandir — List files and directories inside the specified path
$files = array_slice($files, 2); // array_slice — Extract a slice of the array - tutaj będzie zwracało wszystko, co jest od indeksu 2 w tablicy! Tak, jak w przykładzie poniżej:
								 // $output = array_slice($input, 2);      // returns "c", "d", and "e"

// Kwestia co daje takie sformatowanie styli w funkcji wyświetlającej string? Doszukać się tego później jakoś!

echo <<<END
<table class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th>lp</th>
            <th>Nazwa</th>
            <th>Typ [MIME]</th>
            <th>Rozmiar [B]</th>
        </tr>
    </thead>

    <tbody>
END;

$i = 1;
foreach ($files as $file) { // Przypisujemy w trakcie iteracji poszczególne elementy tablicy $files do zmiennej $file, dzięki temu możemy operowac
							// na poszczególnych elementach tablicy, jednocześnie unikając konieczności jej modyfikacji! Dodatkowo po każdym zakończeniu
							// operacji dla danego etapu iteracji wskaźnik tablicy przesuwa się o 1!
    $fileNameEncoded = urlencode($file); // urlencode — URL-encodes string - to ma w jakis sposób przekazywac zmienne kolejnej stronie!
    // This function is convenient when encoding a string to be used in a query part of a URL, as a convenient way to pass variables to the next page.

    // Plik w postaci zakodowanej w postaci kodu URL!

    $mimeType = mime_content_type($target_dir . $file); // To jest dwuczęściowy identyfikator plików w Internecie, służy bodajże do rozpoznawania formatów plików
    // Tylko PO CO tu jest to $target_dir.   ? To znaczy, że plik znajduje się, czy ma się znaleźć w podanym folderze, jak to zinterpretować tu?
    $fileSize = filesize($target_dir . $file);
    
    // Dobra - tej kropki na razie tu nie ogarnę :P Przy "echo" taka kropka rozdziela różne typy wprowadzanych danych: echo $filename . ': ' . filesize($filename) . ' bytes'; dając somefile.txt: 1024 bytes
    // Ale tutaj to już aż tak proste, to nie jest.

    // Rozgryźć, o co chodzi w tych poszczególnych 3-ch zmiennych! Co one tam w ogóle wprowadzają!
    
			// Poniżej pokazane jest, co ma być z danym plikiem wykonane - przekazujemy go jako argument do download.php!

echo <<<END
        <tr>
            <td>$i</td>
            <td><a href="download.php?file=$fileNameEncoded">$file</a></td>
            <td>$mimeType</td>
            <td>$fileSize</td>
        </tr>
END;
    $i++;
}

echo <<<END
    </tbody>
</table>
END;

?>