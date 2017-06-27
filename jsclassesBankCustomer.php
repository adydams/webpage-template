<html>
<head></head>
<body>
<script type="text/javascript">

document.write("Hello");


function customer(name, street, country, email, balance){

	this.name = name;
	this.street= street;
	this.country= country;
	this.email = email;
	this.balance = balance;
	this.withdraw= function(amtwithdraw){
					this.balance -= amtwithdraw;
	};
	this.deposit= function(amtdeposit){
	this.balance -= amtdeposit;
	};

}

var customer1 = new customer("dare", "tophill", "bangladesh", "dare@tophill", 0.0);
document.write(customer1.name);
document.write(customer1.deposit(5000));
document.write(customer1.withdraw(2506));


</script>
</body>
</html>