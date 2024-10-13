angular.module('todoApp').factory('RequestsErrorHandler', ['$q', function($q) {
    var specificallyHandleInProgress = false;
    return {
        // --- The user's API for claiming responsiblity for requests ---
        specificallyHandled: function(specificallyHandledBlock) {
            specificallyHandleInProgress = true;
            try {
                return specificallyHandledBlock();
            } finally {
                specificallyHandleInProgress = false;
            }
        },

        // --- Response interceptor for handling errors generically ---
        responseError: function(rejection) {
            if (rejection && rejection.status == 401) {
                alert('Bạn đã đăng nhập tại phiên bản khác buộc phải thoát?');
                window.parent.postMessage(JSON.stringify({
                   data: {},
                   name: 'EVENT_GO_LOGIN',
                   to: 'main'
                }), '*');

                window.location.href = '/login';
            }
            return $q.reject(rejection);
        }
    };
}]);
