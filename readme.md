# Laravel_teste_01
 Cadastro de usuarios

Para usar:

1)Descompactar a pasta.
2)Subir serviço do  mysql.
3)Criar um banco chamado laravel, de user root sem senha.
4)Navegar via cmd até a pasta e rodar o php artisan migrate
5)Depois que ele criar a tabela, pode popular com estes scripts:

INSERT INTO `cadusuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `foto`) VALUES (NULL, 'teste', 'teste@teste.com', '123', '51-3333-3332', 'https://m.media-amazon.com/images/M/MV5BMTUyNzk3MjA1OF5BMl5BanBnXkFtZTcwMTE1Njg2MQ@@._V1_SX500.jpg');

INSERT INTO `cadusuarios` (`id`, `nome`, `email`, `senha`, `telefone`, `foto`) VALUES (NULL, 'teste2', 'teste2@gmail.com', '321', '51-3256-3333', 'https://m.media-amazon.com/images/M/MV5BMTM0MDgwNjMyMl5BMl5BanBnXkFtZTcwNTg3NzAzMw@@._V1_SX500.jpg');

6)Dito isso é só rodar no cmd o php artisan serve



Tem uma imagem na raiz de como ficou ele pupulado.
Se chama Exemplo.png.


Este foi oficialmente meu primeiro projeto criado com Laravel.
Até então nunca tinha o usado.
Cheguei a começar a trabalhar na inserção de novos usuarios porém o tempo não deu.
Fiz algumas validações na tela de inserção, porém não muitas.
Gostaria de deixar um adendo a questão da imagem.
Eu nunca até hoje fiz uso de um componente de captar uma imagem e salva-la num local.
Com medo de fazer algo feio demais optei por trabalhar no safe, e pegar apenas o caminho
de destino da imagem numa string pra exibir.
Possivelmente devo em breve por um componente correto ali .
