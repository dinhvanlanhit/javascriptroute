// console.log(javascriptroutes);
function toQueryString(params = {}, prefix){
    let query = Object.keys(params).map((k) => {
        let key = k;
        let value = params[key];
        if (!value && (value === null || value === undefined || isNaN(value))) {
            value = "";
        }
        switch (params.constructor) {
            case Array:
                key = `${prefix}[]`;
                break;
            case Object:
                key = (prefix ? `${prefix}[${key}]` : key);
                break;
        }
        if (typeof value === "object") {
            return toQueryString(value, key); // for nested objects
        }
        return `${key}=${encodeURIComponent(value)}`;
    });
    return query.join("&");
}
function route(name=null,parameters=null,object={}){
	let param_input = new Array();
    let queryString = null;
    let urlfull = null;
    // check parameters
		if(parameters!==null&&Array.isArray(parameters)){
    		param_input = parameters;
    }else if(parameters!==null&&typeof(parameters)==="object"){
    		queryString = toQueryString(parameters);
    }else if(parameters!==null&&parameters!==""&&typeof(parameters)==="string"){
    		param_input = [parameters];
    }
    // check object
    if(object!==null&&typeof(object)==="object"&&Object.keys(object).length>0){
    		queryString = toQueryString(object);
    }
    if(name!==""&&name!==null){
        let route = javascriptroutes.find((e)=>e!=null&&e.name===name);
        if(route!==null){
            var paramRoute = route.parameters;
            urlfull = route.url;
            if(paramRoute.length>0){
                param_input.forEach(function(item,index){
                    if(paramRoute[index]!==undefined){
                        let parame = paramRoute[index];
                        if(parame!==""&&item!==""){
                            urlfull = urlfull.replace(parame,item);
                        }
                    }
                });
            }
        }
    }
    if(queryString!==null){
    		urlfull = (urlfull+"?"+queryString).replace("&amp;","&");
    }
    return urlfull;
}