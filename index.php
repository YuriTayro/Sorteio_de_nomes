<?php

//ARRAY PARA GUARDAR UMA LISTA DE NOMES
$nomes = [];

do{
    echo "Menu de opções: \n\n";
    echo " 1 - Adicionar\n";

    if(count($nomes) >= 1) echo " 2 - Listar\n";

    if(count($nomes) >= 2) echo " 3 - Sortear\n";
    echo " 4 - Sair\n\n";
    
    //OPÇÃO SELECIONADA PELO USUARIO
    $opcao = readline('Digite a opção desejada: ');

    echo "\n\n";

    //VALIDACAO DAS OPÇÕES
    switch($opcao){
        //ADICIONAR
        case 1:
            $nomes[] = readline('Digite um novo nome: ');
            echo "\n\n";
            break;

        //LISTAR
        case 2:
            if(count($nomes) >= 1){
                echo "Nomes na lista:\n";
                foreach ($nomes as $nome) {
                echo " - ".$nome."\n";
            }
            }
            echo "\n\n";
            break;

            //SORTEAR
            case 3:
                if(count($nomes) >= 2){
                    //SORTEIO DA POSIÇÃO DO ARRAY
                    $indice = array_rand($nomes);

                    //NOME SORTEADO
                    echo "Nome do sorteado: ".$nomes[$indice];

                    echo "\n\n";

                    //REMOVE NOMES JÁ SORTEADOS
                    unset($nomes[$indice]);
                }
                break;
    }

}while($opcao != 4);



