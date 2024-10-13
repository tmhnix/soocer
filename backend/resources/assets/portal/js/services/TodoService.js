angular.module('portal').factory('Api', ['$http',
  function ($http) {
    return {
    	updateUserStatus: function (user_id, status) {
    		return $http.put('/portal/api/users/'+user_id+'/status', {status: status}).then(function (data) {
    			return data.data.data;
    		});
    	},
    	getOdds: function (event_id, since_time) {
    		since_time = since_time || 1516198211;
    		return $http.get('/api/v1/inplay/getOdds?event_id='+event_id+'&since_time='+since_time).then(function (data) {
    			return data.data.data;
    		});
    	},
    	checkOdds: function (id, key, value) {
            return $http.get('api/v1/inplay/checkOdd?id='+id+'&key='+key+'&value='+value).then(function (data) {
                return data.data.data;
            });
        },
        deleteUser: function (id) {
    		return $http.delete('api/users/'+id+'/delete').then(function (data) {
    			return data.data.data;
    		});
    	},
		checkOnline: function (id) {
    		return $http.get('api/check-online?ids='+ id).then(function (data) {
    			return data.data.data;
    		});
    	}
    }
  }
]);