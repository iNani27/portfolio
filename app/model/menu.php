<?php

/**
 * Description of menu
 *
 * @author Isabelle Nani Dev
 */
class Menu {

    public function __construct() {
        $this->_db = new Database();
    }

    public function getMenu() {
        $menu = array();
        $resursa = $this->_db->query("SELECT * FROM tbl_menu WHERE parent_id=0");
        while ($row = $resursa->fetch(PDO::FETCH_ASSOC)) {
            $resursa1 = $this->_db->query("SELECT * FROM tbl_menu WHERE parent_id=" . $row);
            if ($resursa1->rowCount() > 0) {
                $submenu = array();
                while ($row1 = $resursa1->fetch(PDO::FETCH_ASSOC)) {
                    $submenu[] = array(
                        'm_id' => $row1,
                        'id' => $row1,
                        'm_name' => $row1,
                        'm_link' => $row1,
                        'm_visibility' => $row1
                    );
                }
            } else {
                $submenu = '0';
            }
            $menu[] = array(
                'm_id' => $row,
                'id' => $row,
                'm_name' => $row,
                'm_link' => $row,
                'm_visibility' => $row,
                'submenu' => $submenu
            );
        }

        return $menu;
    }

}

?>
