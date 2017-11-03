<?php

                $sql = "SELECT * FROM Carriages_Walking_carts";
                $result = $connection_to_db->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                  
                    while($row = $result->fetch_assoc()) {
                        //echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
                        echo '<article class="category_page_item_info">'.
                        '<img src="/pictures/' . $row["image"] . '" width="100%" height="100%">' .
                        '<a>' . $row["name_of_company"] . '</a>' .
                        '<p>' . $row["price"] . ' грн.' .  '</p>' . 
                        '</article>'; 
                    }




                } else {
                    echo "0 results";
                }
                $connection_to_db->close();
              ?>