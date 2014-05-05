jQuery.extend(DateInput.DEFAULT_OPTS, {   
month_names: ["һ��", "����", "����", "����", "����", "����", "����", "����", "����", "ʮ��", "ʮһ��", "ʮ����"],   
short_month_names: ["һ", "��", "��", "��", "��", "��", "��", "��", "��", "ʮ", "ʮһ", "ʮ��"],   
short_day_names: ["һ", "��", "��", "��", "��", "��", "��"],  
 dateToString: function(date) {  
    var month = (date.getMonth() + 1).toString();  
    var dom = date.getDate().toString();  
    if (month.length == 1) month = "0" + month;  
    if (dom.length == 1) dom = "0" + dom;  
    return date.getFullYear() + "-" + month + "-" + dom;  
  }  
  
});   
  
$(function() {   
$("#shenqingshu").date_input();     
});   
