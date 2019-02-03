
<template>
    <div id="DIV_1">
	<div id="DIV_2">
		<div id="DIV_3" repeat="NUMBER" v-for="coin in coins" :key="coin.id">
			
            <span id="SPAN_5">{{coin.name}}</span> Price
            <span id="SPAN_6">{{coin.sell_price}}$</span> {{coin.name}}
            <span id="SPAN_7">{{coin.buy_price}}$</span>  {{coin.name}}
            <span id="SPAN_8">0,03%</span> ESTX50 
            <span id="SPAN_9">0,00%</span> NIKKEI 
            
		</div>
		<div id="DIV_11">
			<span id="SPAN_12">0,38%</span> ATX <span id="SPAN_13">0,16%</span> DAX <span id="SPAN_14">0,04%</span> TecDax <span id="SPAN_15">0,19%</span> MDAX <span id="SPAN_16">0,03%</span> ESTX50 <span id="SPAN_17">0,00%</span> NIKKEI <span id="SPAN_18">0,03%</span> EUR/CHF
		</div>
		
	</div>
</div>  
</template>



<script>
    export default {
        
        data(){
            return{
                coins:[],
                
                
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
            }

        },
        
    }
</script>

<style>
#DIV_1 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    height: 40px;
    margin-top: 20%;
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    width: 100%;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 555px 20px;
    transform-origin: 555px 20px;
    caret-color: rgb(255, 255, 255);
    background: rgb(52, 58, 64) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
    overflow: hidden;
    padding: 8px 0px;
}/*#DIV_1*/

#DIV_1:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_1:after*/

#DIV_1:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_1:before*/

#DIV_2 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    height: 0px;
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    width: 100000px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 50000px 0px;
    transform-origin: 50000px 0px;
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_2*/

#DIV_2:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_2:after*/

#DIV_2:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_2:before*/

#DIV_3, #DIV_11, #DIV_19 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    float: left;
    height: 24px;
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    width: 550.359px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 367.672px 12px;
    transform: matrix(1, 0, 0, 1, -417.251, 0);
    transform-origin: 367.672px 12px;
    caret-color: rgb(255, 255, 255);
    animation: marquee-text-animation 45s linear 0s infinite normal none running;
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_3, #DIV_11, #DIV_19*/

#DIV_3:after, #DIV_11:after, #DIV_19:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_3:after, #DIV_11:after, #DIV_19:after*/

#DIV_3:before, #DIV_11:before, #DIV_19:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: left;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 400 normal 16px / 24px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#DIV_3:before, #DIV_11:before, #DIV_19:before*/

#SPAN_4, #SPAN_6, #SPAN_8, #SPAN_10, #SPAN_14, #SPAN_16, #SPAN_18, #SPAN_22, #SPAN_24, #SPAN_26 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    display: inline-block;
    height: 18px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    width: 43.9688px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 21.9844px 9px;
    transform-origin: 21.9844px 9px;
    caret-color: rgb(255, 255, 255);
    background: rgb(40, 167, 69) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 0px 0px 0px 8px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 3px 4.8px;
}/*#SPAN_4, #SPAN_6, #SPAN_8, #SPAN_10, #SPAN_14, #SPAN_16, #SPAN_18, #SPAN_22, #SPAN_24, #SPAN_26*/

#SPAN_4:after, #SPAN_6:after, #SPAN_8:after, #SPAN_10:after, #SPAN_14:after, #SPAN_16:after, #SPAN_18:after, #SPAN_22:after, #SPAN_24:after, #SPAN_26:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_4:after, #SPAN_6:after, #SPAN_8:after, #SPAN_10:after, #SPAN_14:after, #SPAN_16:after, #SPAN_18:after, #SPAN_22:after, #SPAN_24:after, #SPAN_26:after*/

#SPAN_4:before, #SPAN_6:before, #SPAN_8:before, #SPAN_10:before, #SPAN_14:before, #SPAN_16:before, #SPAN_18:before, #SPAN_22:before, #SPAN_24:before, #SPAN_26:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_4:before, #SPAN_6:before, #SPAN_8:before, #SPAN_10:before, #SPAN_14:before, #SPAN_16:before, #SPAN_18:before, #SPAN_22:before, #SPAN_24:before, #SPAN_26:before*/

#SPAN_5, #SPAN_7, #SPAN_13, #SPAN_21 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    display: inline-block;
    height: 18px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    width: 60px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 21.9844px 9px;
    transform-origin: 21.9844px 9px;
    caret-color: rgb(255, 255, 255);
    background: rgb(220, 53, 69) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 0px 0px 0px 8px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 3px 4.8px;
}/*#SPAN_5, #SPAN_7, #SPAN_13, #SPAN_21*/

#SPAN_5:after, #SPAN_7:after, #SPAN_13:after, #SPAN_21:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_5:after, #SPAN_7:after, #SPAN_13:after, #SPAN_21:after*/

#SPAN_5:before, #SPAN_7:before, #SPAN_13:before, #SPAN_21:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_5:before, #SPAN_7:before, #SPAN_13:before, #SPAN_21:before*/

#SPAN_9, #SPAN_17, #SPAN_25 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    display: inline-block;
    height: 18px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    width: 43.9688px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 21.9844px 9px;
    transform-origin: 21.9844px 9px;
    caret-color: rgb(255, 255, 255);
    background: rgb(23, 162, 184) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 0px 0px 0px 8px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 3px 4.8px;
}/*#SPAN_9, #SPAN_17, #SPAN_25*/

#SPAN_9:after, #SPAN_17:after, #SPAN_25:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_9:after, #SPAN_17:after, #SPAN_25:after*/

#SPAN_9:before, #SPAN_17:before, #SPAN_25:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_9:before, #SPAN_17:before, #SPAN_25:before*/

#SPAN_12, #SPAN_20 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    display: inline-block;
    height: 18px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    width: 43.9688px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 21.9844px 9px;
    transform-origin: 21.9844px 9px;
    caret-color: rgb(255, 255, 255);
    background: rgb(40, 167, 69) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 0px 0px 0px 8px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 3px 4.8px;
}/*#SPAN_12, #SPAN_20*/

#SPAN_12:after, #SPAN_20:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_12:after, #SPAN_20:after*/

#SPAN_12:before, #SPAN_20:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_12:before, #SPAN_20:before*/

#SPAN_15, #SPAN_23 {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    display: inline-block;
    height: 18px;
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    width: 43.9688px;
    column-rule-color: rgb(255, 255, 255);
    perspective-origin: 21.9844px 9px;
    transform-origin: 21.9844px 9px;
    caret-color: rgb(255, 255, 255);
    background: rgb(220, 53, 69) none repeat scroll 0% 0% / auto padding-box border-box;
    border: 0px none rgb(255, 255, 255);
    border-radius: 4px 4px 4px 4px;
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 0px 0px 0px 8px;
    outline: rgb(255, 255, 255) none 0px;
    padding: 3px 4.8px;
}/*#SPAN_15, #SPAN_23*/

#SPAN_15:after, #SPAN_23:after {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_15:after, #SPAN_23:after*/

#SPAN_15:before, #SPAN_23:before {
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    text-align: center;
    text-decoration: none solid rgb(255, 255, 255);
    text-size-adjust: 100%;
    white-space: nowrap;
    column-rule-color: rgb(255, 255, 255);
    caret-color: rgb(255, 255, 255);
    border: 0px none rgb(255, 255, 255);
    font: normal normal 700 normal 12px / 12px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    outline: rgb(255, 255, 255) none 0px;
}/*#SPAN_15:before, #SPAN_23:before*/



</style>

