<?php
$this->load->view('templates/header');
$this->load->view('templates/sidebar_menu');
?>

                            <?php $this->load->view($content);?>
    </div>
</div>
</div>

            <?php
$this->load->view('templates/footer');
?>
