function DateValidator(StrDate){
    if(StrDate || StrDate.length>0){
        var comp = StrDate.split('/');
        if(comp.length == 3){
            var m = parseInt(comp[1], 10);
            var d = parseInt(comp[0], 10);
            var y = parseInt(comp[2], 10);
            var date = new Date(y,m-1,d);
        	if (date.getFullYear() == y && date.getMonth() + 1 == m && date.getDate() == d) {
            	return true;
        	}else{
            	return false;
        	}
        }
        else{
            return false;
        }        
    }
    else{
        return false;
    }
}

function EmailValidator(email){
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}