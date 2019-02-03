<template>
<div>
        <form  @submit.prevent="formSubmit"  method="post">
        <div id="app" class="ui grid">
        <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                            <div class="ui label sub-ul-li">Currency</div>
                            <select class="select button form-control prompt " v-model="coinx" name="name" @change="myFunction()">
                                <option value="" selected>Select Currency</option>
                                <option v-for="(coin,key) in coins" :value="key">   
                                {{ coin.name }}
                                </option>
                            </select>            
            </div>
            <div class="col-md-6 ">
                <div class="ui label sub-ul-li">Exchange Currency with</div>
                    <select class="select button form-control prompt " v-model="coinEx" name="Exname" @change="myFunction()">
                        <option value="" selected>Select Currency</option>
                        <option v-for="(coin,key) in coins" :value="key">   
                             {{ coin.name }}
                        </option>
                    </select> 
                
                
                
            
            </div>  
    
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="ui label sub-ul-li">Amount</div>
                
                <input class="form-control prompt " type="text" name="amt" 
                v-model="amt"   placeholder="Buy Amount" @keyup="myFunction()">
            </div> 
            <div class="col-md-6">
                <span grButton> Price</span>
                <span class="input-group-text" id="basic-addon3" aria-disabled=""  name="total">
                    
                    Coin:{{coin_num}}
                </span>
                
            </div>  
        </div>
        
        </div>
        <div class="row">
            <div class="col-md-6">
                <span style="color:red;">Reserved Balance:</span> 100.00$
            </div>
        </div>
        
        <div class="container">
            <div class="wrap">
                <button type="submit" data-toggle="modal" data-target="#exampleModalLong" :v-model="buy" >Exchange</button>

                <svg width="66px" height="66px">
                <circle class="circle_2" stroke-position="outside" stroke-width="3" fill="none" cx="34" cy="33" r="29" stroke="#1ECD97"></circle>
                </svg>
            </div>
        </div>

    </div>

    </form>

 

    <div id="modal">
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content2">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <br>
                
                <br>
                {{output.name}}
                <br>
                {{output.amt}}
                <br>
                {{exchange_coin}}
                <br>
                {{coin_num }}
            </div>
            <div class="contact_info">
                <h1>Provide Your Contact Info</h1>
            <form class="form-style-9">
                <ul>
               <li>
                <input type="text" name="field3" class="field-style field-full align-none" id="email" v-model="email"
                 placeholder="Email Address" />
                </li>
                <li>
                <input type="text" name="field3" class="field-style field-full align-none"  id="phn" v-model='phn'
                 placeholder="Phone Number" />
                </li>
                <li>
                <input type="text" name="field3" class="field-style field-full align-none" id="phn" v-model='account'
                 placeholder="Account Number" />
                </li>
               
                </ul>
            </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" data-toggle="modal" 
                data-target="#details_modal" :v-model="details" data-dismiss="modal">Save order</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancle</button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div id="modal_2 " aria-hidden="true">
        <div class="modal fade" id="details_modal" tabindex="-1" role="dialog" 
        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            
            <table>
                <thead>
                    <tr>
                    <th scope="col" colspan="2">Item</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <strong class="book-title">{{output.name}}</strong>
                    </td>
                    <td class="item-stock">{{output.bank}}</td>
                    <td class="item-qty">{{amt}}</td>
                    <td class="item-price">${{output.price}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="text-offset">
                    <td colspan="3">SubTotal</td>
                    <td>${{sub_total}}
                        
                    </td>
                    </tr>
                    <tr class="text-offset">
                    <td colspan="3">Tax</td>
                    <td>$2.00</td>
                    </tr>
                    <tr>
                    <td colspan="3">Total</td>
                    <td>${{total}}</td>
                    </tr>
                </tfoot>
                </table>
                Email:{{email}}
                <br>
                Phone:{{phn}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="temp_order()" >Save</button>
            <button type="button" class="btn btn-primary"
             data-dismiss="modal" data-toggle="modal" data-target="#Conf_modal" >Order Now
             </button>
            </div>
            
            </div>
            
            
            </div>
        </div>
        </div>
        <div class="modal3" aria-hidden="true">
            <div class="modal fade" id="Conf_modal" tabindex="-1" role="dialog" 
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                   
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>You will recieve {{coin_num}} to your {{exchange_coin}} account after sending {{output.amt}} 
                        {{output.name}} to our {{output.name}} account. 
                        After varifying your Trx number money will be sent to your {{output.name}} account
                    </p>
                    <h1>Submit Your TrX number</h1>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Trx Number</label>
                        <input type="Text" class="form-control" id="trx" v-model='Trx' placeholder="Trx Number">
                    </div>
                </div>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-primary" @click="order()"
                  data-dismiss="modal" data-toggle="modal" data-target="#thankyou" >Confirm</button>
                </div>
                
                
                </div>
            </div>

        </div>

        <div class="modal4">
        <div class="modal fade" id="thankyou" tabindex="-1" role="dialog" 
        aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="color:red;">
            Thank you for making transaction with us.You order will be reviewd and completed in 24 hours.
        </div>
        </div>

    </div>
</template>





<script>
    export default {
        
        data(){
            return{
                coins:[],
                coinx:'',
                coinEx:'',
                coiny:'',
                price:'',
                selected: '',
                total:'',
                coin:'',
                amt:1,
                new_total:'',
                exchange_price:'',
                stock:'',
                bank:'',
                name:'',
                output:'',
                showModal: false,
                buy:true,
                email:'',
                phn:'',
                Trx:'',
                payment:'',
                account:'',
                sub_total:'',
                coin_num:'',
                exchange_coin:'',
                type:''

                
                
            }

        },
        mounted() {
            this.showCoin();
            console.log('Component mounted.')
        },

        

        methods:{
            showCoin(){
                var _this=this;
                axios.get('/coin')
                    .then(function (response) {
                        console.log(response);
                        _this.coins=response.data;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            },
            myFunction: function() {
               
                let newTotal=0;
                let exchange_price=0;
                let fee =2.50;


                newTotal=newTotal+(this.coins[this.coinx].buy_price*this.amt);
                this.sub_total=(this.coins[this.coinx].buy_price*this.amt);
                exchange_price=exchange_price+(this.coins[this.coinEx].sell_price);
                this.exchange_coin=this.coins[this.coinEx].name;
                this.total=(newTotal+fee).toFixed(2);
                this.coin_num=(this.total/exchange_price).toFixed(2);
                this.type=2;
                
              
            },
            info(){
               phn=this.phn;
               email=this.email;

            },

            formSubmit(e) {
               
                let currentObj = this;
                axios.post('/store', {
                    name:this.coins[this.coinx].name,
                    bank:this.coiny,
                    amt:this.amt,
                    price:this.coins[this.coinx].buy_price,
                    stock:this.stock
                    
                    
                    
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    //window.location.replace("/order" + this.output);
                  
                   console.log('now show a modal here!!!');
                   // window.location="/store";
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            },
            temp_order(){
                let currentObj = this;
                axios.post('/temp_order', {
                    name:this.coins[this.coinx].name,
                    price:this.coins[this.coinx].buy_price,
                    bank:this.coiny,
                    amt:this.amt,
                    phn:this.phn,
                    email:this.email,
                    total:this.total,
                    account:this.account,
                    type:this.type,
                    coin_num:this.coin_num,
                    exchange_coin:this.exchange_coin
                    
                    
                    
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    
                  
                   console.log(name);
                   // window.location="/store";
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            },

            order(){
                let currentObj = this;
                axios.post('/order', {
                    name:this.coins[this.coinx].name,
                    price:this.coins[this.coinx].buy_price,
                    bank:this.coiny,
                    amt:this.amt,
                    phn:this.phn,
                    email:this.email,
                    total:this.total,
                    Trx:this.Trx,
                    payment:this.payment,
                    account:this.account,
                    type:this.type,
                    coin_num:this.coin_num,
                    exchange_coin:this.exchange_coin


                    
                    
                })
                .then(function (response) {
                    currentObj.output = response.data;
                    
                  
                   console.log(name);
                   // window.location="/store";
                })
                .catch(function (error) {
                    currentObj.output = error;
                });
            },

        }

        }
        
    
</script>

<style>

.modal-content2 {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 650px;
    text-align: center;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 30px;
    outline: 0;
    /* margin-right: 24px; */
    margin-left: -28x;
}
.form-control {
  display: block;
  width: 100%;
  height: calc(2.19rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 18px;
  font-weight: 400;
  line-height: 1.6;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.fade {
  transition: opacity 0.15s linear;
  background-color: #1ECD97;
}

table {
  border-collapse: separate;
  border-spacing: 0;
  color: #4a4a4d;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  width: 100%;
}
th,
td {
  padding: 10px 15px;
  vertical-align: middle;
}
thead {
  background: #395870;
  background: linear-gradient(#49708f, #293f50);
  color: #fff;
  font-size: 11px;
  text-transform: uppercase;
}
th:first-child {
  border-top-left-radius: 5px;
  text-align: left;
}
th:last-child {
  border-top-right-radius: 5px;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
.book-title {
  color: #395870;
  display: block;
}
.text-offset {
  color: #7c7c80;
  font-size: 12px;
}
.item-stock,
.item-qty {
  text-align: center;
}
.item-price {
  text-align: right;
}
.item-multiple {
  display: block;
}
tfoot {
  text-align: right;
}
tfoot tr:last-child {
  background: #f0f0f2;
  color: #395870;
  font-weight: bold;
}
tfoot tr:last-child td:first-child {
  border-bottom-left-radius: 5px;
}
tfoot tr:last-child td:last-child {
  border-bottom-right-radius: 5px;
} 
input[type='text'],select{
    color: #333;
    padding-left: 18px;
    padding-right: 10px;
    transition: box-shadow 320ms;
    box-shadow: 0px 0px 8px 10px rgba(0,0,0,0.1);
    border-radius: 2px;
    font-size: 18px;
    border: 0px;
}

input[type='text']:focus {

    outline: 0px;
    outline-offset: 0px;
    box-shadow: 0px 0px 1px 5px rgba(0,0,0,0.12);
}

input:-moz-placeholder {
    color: #cccccc;
}
.wrap {
  position: relative;
  margin: auto;
  margin-top: 5%;
  width: 191px;
  text-align: center;
}
.wrap button {
  display: block;
  height: 60px;
  padding: 0;
  width: 191px;
  background: none;
  margin: auto;
  border: 2px solid #1ECD97;
  font-size: 18px;
  font-family: "Lato";
  color: #1ECD97;
  cursor: pointer;
  outline: none;
  text-align: center;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
  -moz-transition: background 0.4s, color 0.4s, font-size 0.05s, width 0.4s, border 0.4s;
  -o-transition: background 0.4s, color 0.4s, font-size 0.05s, width 0.4s, border 0.4s;
  -webkit-transition: background 0.4s, color 0.4s, font-size 0.05s, width 0.4s, border 0.4s;
  transition: background 0.4s, color 0.4s, font-size 0.05s, width 0.4s, border 0.4s;
}
.wrap button:hover {
  background: #1ECD97;
  color: white;
}
.wrap img {
  position: absolute;
  top: 11px;
  display: none;
  left: 71.5px;
  -moz-transform: scale(0.6, 0.6);
  -ms-transform: scale(0.6, 0.6);
  -webkit-transform: scale(0.6, 0.6);
  transform: scale(0.6, 0.6);
}
.wrap svg {
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
  /* @include rotate(270deg); */
  position: absolute;
  top: -2px;
  left: 62px;
  display: none;
}
.wrap svg .circle_2 {
  stroke-dasharray: 0 200;
}
.wrap svg .fill_circle {
  -moz-animation: fill-stroke 2s 0.4s linear forwards;
  -webkit-animation: fill-stroke 2s 0.4s linear forwards;
  animation: fill-stroke 2s 0.4s linear forwards;
}
.wrap .circle {
  width: 60px;
  border: 3px solid #c3c3c3;
  /* border: none; */
}
.wrap .circle:hover {
  background: none;
}
.wrap .filled {
  background: #1ECD97;
  color: white;
  line-height: 60px;
  font-size: 160%;
}

/* Contact Form style */

.form-style-9{
	max-width: 450px;
	background: #FAFAFA;
	padding: 30px;
	margin: 50px auto;
	box-shadow: 1px 1px 25px rgba(0, 0, 0, 0.35);
	border-radius: 10px;
	border: 6px solid #305A72;
}
.form-style-9 ul{
	padding:0;
	margin:0;
	list-style:none;
}
.form-style-9 ul li{
	display: block;
	margin-bottom: 10px;
	min-height: 35px;
}
.form-style-9 ul li  .field-style{
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	padding: 8px;
	outline: none;
	border: 1px solid #B0CFE0;


}.form-style-9 ul li  .field-style:focus{
	box-shadow: 0 0 5px #B0CFE0;
	border:1px solid #B0CFE0;
}
.form-style-9 ul li .field-split{
	width: 49%;
}
.form-style-9 ul li .field-full{
	width: 100%;
}
.form-style-9 ul li input.align-left{
	float:left;
}
.form-style-9 ul li input.align-right{
	float:right;
}
.form-style-9 ul li textarea{
	width: 100%;
	height: 100px;
}
.form-style-9 ul li input[type="button"], 
.form-style-9 ul li input[type="submit"] {
	-moz-box-shadow: inset 0px 1px 0px 0px #3985B1;
	-webkit-box-shadow: inset 0px 1px 0px 0px #3985B1;
	box-shadow: inset 0px 1px 0px 0px #3985B1;
	background-color: #216288;
	border: 1px solid #17445E;
	display: inline-block;
	cursor: pointer;
	color: #FFFFFF;
	padding: 8px 18px;
	text-decoration: none;
	font: 12px Arial, Helvetica, sans-serif;
}
.form-style-9 ul li input[type="button"]:hover, 
.form-style-9 ul li input[type="submit"]:hover {
	background: linear-gradient(to bottom, #2D77A2 5%, #337DA8 100%);
	background-color: #28739E;
}
</style>

