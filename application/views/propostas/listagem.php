<div class="box_propostas">
    <?php
        foreach($propostas as $proposta){
            $data["proposta"] = $proposta;
            $this->load->view("propostas/box_preview", $data);
        }
    ?>
</div>
