<html>
<script >

function customer(name, street, country, email, balance){

this.name = name;
this.street= street;
this.country= country;
this.email = email;
this.balance = balance;
this.withdraw= function (amtwithdraw){
	this.balance -= amtwithdraw;
};
this.deposit= function (amtdeposit){
	this.balance -= amtdeposit;
};

}

var customer1 = customer(dare, tophill, bangladesh,dare@tophill, 0.0);
document.write(customer1.name);
document.write(customer1.deposit(5000));
document.write(customer1.withdraw(2506));


</script>

<script type="text/javascript">
function openalert(mess){

	alert(mess);
}


</script>
<a href="javascript:Void(0)" onClick="alert('Hello')"> Say hello </a><br>
<a href="javascript:Void(0)" onClick="alert('Something')"> Say Something </a><br>
<a href="javascript:Void(0)" onMouseover="this.style.color='green'"> Say hello </a><br>
<a href="javascript:Void(0)" onMouseout="this.style.color='red'">Click Me!</a><br>
<a href="javascript:Void(0)" ondblClick="this.text='You just double click me!'">Double Click Me!</a><br>
<a href="javascript:Void(0)" onMousedown="this.text='Thanks thanks!'">show message</a><br>
<a href="javascript:Void(0)" onMouseup="openalert('Mouse up')">Mouse Up!</a><br>
</html>