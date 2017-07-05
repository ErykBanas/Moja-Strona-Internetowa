<?php

require_once "directory.php"; //$target_dir - dolarami bodajże są oznaczane zmienne w php-ie! - w tym php-ie przypisujemy własnie podanej zmiennej lokalizację, która nas interesuje, czyli tu "uploads/"!

$files = scandir($target_dir); // Ogarnąć skąd się tu te funkcje pobrały! - scandir — List files and directories inside the specified path

// Ograniczamy wcześniej utworzoną listę poniższą funkcją!

$files = array_slice($files, 2); // array_slice — Extract a slice of the array - tutaj będzie zwracało wszystko, co jest od indeksu 2 w tablicy będącej pierwszym argumentem tej funkcji!
								 //Tak, jak w przykładzie poniżej: $output = array_slice($input, 2);      // returns "c", "d", and "e"



// Kwestia co daje takie sformatowanie styli w funkcji wyświetlającej string? Doszukać się tego później jakoś!

// Nie tylko do HTML-a można wpierdzielic php-a, może byc też odwrotnie! Do pliku napisanego php-em nie wychodząc z niego można właśnie poprzez funkcję "echo" wpierdzielic kod html-a! (chociaż to "echo" to precyzyjniej
// mówiąc to jest taki konstruktor językowy)!

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
    
    // To jest prawie napewno ścieżka dostępu do folderu. Tak, jak w "download.php" pokazano: $filePath = $target_dir.$fileName;

    // Rozgryźć, o co chodzi w tych poszczególnych 3-ch zmiennych! Co one tam w ogóle wprowadzają!
    
			// Poniżej pokazane jest, co ma być z danym plikiem wykonane - przekazujemy go jako argument do download.php!

    
    
    
    // Kwestia gdzie tam są zakodowane te różne przyciski :P "Przeglądaj... x3, Upload"?
    
    // Bo poniżej jest zakodowane bodajże ściąganie tych plików, których lista jest umieszczona w tej tabeli! (tzn. hyperreferencja - link przekierowujący na odpowiednią stronę download.php wykonując odpowiednie operacje
    // dla wybranej w danym momencie obiektu listy (czyli pliku z listy plikow już wcześniej ściągniętych)!
    
    // Ponadto w tabeli podajemy dla łatwiejszego ogarnięcia się użytkownika typ pliku, o którym w danym momencie jest mowa oraz jego rozmiar!
    
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