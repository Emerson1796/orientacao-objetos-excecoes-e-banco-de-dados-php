<?php
	
	
	class contaBancaria {
		
		/**
		* @var string
		*/
		private $banco;
		/**
		* @var string
		*/
		private $nomeTitular;
		/**
		* @var string
		*/
		private $numeroAgencia;
		/**
		* @var string
		*/
		private $numeroConta;
		/**
		* @var float
		*/
		private $saldo;
		
		//"->" acessa propriedades ou métodos de um objeto
		public function _construct(string $banco,
		 string $nomeTitular,
		 string $numeroAgencia, 
		 string $numeroConta, 
		 float $saldo){
			$this->banco = $banco;
			$this->nomeTitular = $nomeTitular;
			$this->numeroAgencia = $numeroAgencia;
			$this->numeroConta = $numeroConta;
			$this->saldo = $saldo;
		}
		
		public function obterSaldo(): string{
			return 'Seu saldo atual é: R$' . $this->saldo;
		}
		
		public function depositar(float $valor): string{
			$this->saldo += $valor;
			return 'Depósito de: R$' . $valor . 'realizado';
		}
		
		public function sacar(float $valor): string{
			$this->saldo -= $valor;
			return 'Saque de: R$' . $valor . 'realizado';
		}
	}

	$conta1 = new contaBancaria(
		'Banco do Brasil', //banco
		'Emerson Gomes', //nomeTitular
		'2222', //numeroAgencia
		'15416-5',	//numeroConta
		0 //saldo
	);
	
	var_dump($conta1)
	
	$conta2 = new contaBancaria(
		'Caixa', //banco
		'Maria Gomes', //nomeTitular
		'2512', //numeroAgencia
		'11356-0',	//numeroConta
		150.00 //saldo
	);
	
	var_dump($conta2)
	
	echo $conta->obterSaldo();
	
	echo PHP_EOL;
	
	echo $conta->depositar(300.00);
	
	echo PHP_EOL;
	
	echo $conta->obterSaldo();
	
	echo PHP_EOL;
	
	echo $conta->sacar(100.00);
	
	echo PHP_EOL;
	
	echo $conta->obterSaldo();
	
	echo PHP_EOL;
	

?>