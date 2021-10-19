const request_xhr = async (url, method="GET", dataPost=null)=>{
	const config = {
		url:url,
		method:method,
		cache:"no-cache",
		body:dataPost,
	
	}
	const response = await fetch(url, config);
	if(response.ok){
		return response.json();
	} else {
		return Promise.reject({
			status: response.status,
			statusText: response.statusText,
			responseText: response.text(),
		});
	}
	}
	