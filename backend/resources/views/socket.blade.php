<script>
    window.JWT_TOKEN = "{{  $authUser->generateJwt() }}";
    window.SOCKET_URL = "{{ env('SOCKET_URL') }}";
</script>
<script src="{{ env('SOCKET_URL') }}/socket.io/socket.io.js"></script>
<script>
    const ioSocket = io(window.SOCKET_URL, {
        // Send auth token on connection, you will need to DI the Auth service above
        query: 'token=' + window.JWT_TOKEN,
        path: '/socket.io'
    });
</script>