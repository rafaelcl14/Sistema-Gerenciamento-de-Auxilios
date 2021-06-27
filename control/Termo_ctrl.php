<?php
    require_once '../model/edital/termo.php';
    require_once '../model/edital/dao-termo.php';


class Termo_ctrl{
    public function __construct(){
        $op = filter_input(INPUT_POST,'op');
        $this->verOpcao($op);
    }
    function verOpcao($op){
        switch ($op){
            case '1':
                $this->cadastrarTermo();
                break;
        }
    }
    function receberDados(){
        $numero_doc = filter_input(INPUT_POST,"id-edital");
        $nome = filter_input(INPUT_POST,"nome-termo");
        $data = filter_input(INPUT_POST,"data-termo");
        $texto = filter_input(INPUT_POST,"validationTextarea");
        $termo = new Termo($numero_doc,$nome,$data,$texto);
        return $termo;
    }

    private function cadastrarTermo(){
        $termo = $this->receberDados();
        if (!empty($termo->getData()) and !empty($termo->getDocSei()) and !empty($termo->getNome()) and !empty($termo->getTexto())){
            concluirCadastroTermo($termo);
        }else{
            echo '<script>alert("Erro ao Salvar!")</script>';
            header('location:../index.php?p=cadastrodetermo');
        }
    }
    private function concluirCadastroTermo($termo){
        $dao = new Dao_termo();
        if ($dao->salvarTermo($termo)==1){
            echo '<script>alert("Salvo!")</script>';
            header('location:../index.php?p=cadastrodetermo;q=true');
        }else{
            echo '<script>alert("Erro!")</script>';
            header('location../index.php?p=cadastrodetermo');
        }
    }
}
new Termo_ctrl();

