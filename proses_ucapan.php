                <?php
                include_once('koneksi.php');
                date_default_timezone_set('Asia/Jakarta');

                // $file = "ucapan.json";
                // $ucapan = file_get_contents($file);
                // $data = json_decode($ucapan, true);

                if (isset($_POST['submit'])) {
                    // if ($_POST['author'] == "" | $_POST['comment'] == "" ) {
                    //     // header('Location: ' . $baseurl );
                    // } else {
                        $author = htmlspecialchars($_POST['author']);
                        $comment = addslashes($_POST['comment']);
                        $tanggal = htmlspecialchars($_POST['datetime']);
                        $idsList = array_column($dataucapan, 'id');
                        $auto_increment_id = max($idsList) + 1;
                        $dataucapan[] = array(
                            'id' => $auto_increment_id,
                            'author' => $author,
                            'comment' => $comment,
                            'tanggal' => $tanggal
                        );
                        $jsonfile = json_encode($dataucapan, JSON_PRETTY_PRINT);
                        $senducapan = file_put_contents($file, $jsonfile);
                        if ($senducapan) {
                            header('Location: ' . $baseurl);
                        } else {
                            header('Location: ' . $baseurl);
                        }
                    }
                // }