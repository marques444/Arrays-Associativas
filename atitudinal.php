<php
//1
$aluno = [
        "nome" => "João",
        "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9
        ]
        ];

    function mediaDosAlunos ($aluno){
    $soma = 0;
    $i = 0;
    $media = 0;
    foreach($aluno["notas"] as $nota){
        $soma += $nota;
        $i++;
        }
    $media = $soma/$i;
    return $media;
    }
    echo (mediaDosAlunos ($aluno));

//2
$aluno = [
        "nome" => "João",
        "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9
        ]
    ];

    function mediaDosAlunos ($aluno){
            $soma = 0;
            $d = 0;
            $media = 0;
        foreach($aluno["notas"] as $nota){
            $soma = $nota;
            $d++;
        }
        $media = $soma/$d;
        return $media;
    }
    echo (mediaDosAlunos ($aluno));

//3
$alunos = [
        [
            "nome" => "João",
            "idade" => 20
        ],
            [
                "nome" => "Maria",
                "idade" => 22
            ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ];
    function alunosDump($alunos){
        return var_dump($alunos);
    }

    echo(alunosDump($alunos));

//4
$usuarioCadastrado = []; 
        
        $cadastro = [
            [
                "nome" => "João",
                "idade" => 20,
                "email" => "email@email.com",
                "senha" => "12345678"
            ],
            [
                "nome" => "Guilherme",
                "idade" => 17,
                "email" => "meu.email@email.com",
                "senha" => "abc12312312"
            ]
        ];
        
        function autenticacao($cadastro,$usuarioCadastrado){
            $count = 0;
            foreach($count as $cadastro){
            $i = 0;
                if(strlen($cadastro["nome"]) > 3){
                    $i++;
                }
                if($cadastro["idade"] >= 18){
                    $i++;
                }
                if(strlen($cadastro["email"]) > 10){
                    $i++;
                }
                if(strlen($cadastro["senha"]) > 8){
                    $i++;
                }
                if($i == 4){
                    array_push($usuarioCadastrado, $cadastro[$count]);
                }else{
                    $user = $count + 1;
                    echo"ERRO CRITICO NO USUARIO {$user}";
                }
            }
        }
        
    autenticacao($cadastro,$usuarioCadastrado);

?>
