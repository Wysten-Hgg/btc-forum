// window.addEventListener('load', function() {
    let currentProvider = null;
    function initializePassword(){
        let password = $("#new_password").val();
        let password2 =  $("#new_passwrd2").val();
        if (password != password2){
            alert('The passwords entered twice are inconsistent')
            return;
        }
        $.post("./index.php?action=initializepassword",{password:password2,password2:password2},function(result){
            console.log(result)
            result = JSON.parse(result);
            if (result.status == 1) {
                alert('Operation succeeded, please log in again');
                window.location.reload();
            }else{
                alert(result.msg);
            }
        });
    }
    function editAddress(){
        $("#save_address").css("display","block");
        $("#edit_address").css("display","none");
        $("#address_val").prop('disabled', false);
    }
    function copyText(ele){
        // console.log(ele)
        // ele.select();
        // ele.setSelectionRange(0, 99999);
        // let value = ele.getAttribute("data-value")
        // navigator.clipboard.writeText(value);
        // alert('Successfully copied link');
        new ClipboardJS(ele, {
            text: function(trigger) {
                return  ele.getAttribute("data-value")
            }
        }).on('success', function(e) {
            alert("Successfully copied link");
            e.clearSelection();
        }).on('error', function(e) {
            alert('Error!');
        });
    }
    function connectMeatMask(){
        ethereum.enable()
            .catch(function(reason) {
                //如果用户拒绝了登录请求
                if (reason === "User rejected provider access") {
                    // 用户拒绝登录后执行语句；
                } else {
                    // 本不该执行到这里，但是真到这里了，说明发生了意外
                    Message.warning("There was a problem signing you in");
                }
            }).then(function(accounts) {
            // 判断是否连接以太
            // if (ethereum.networkVersion !== desiredNetwork) {}
            doSign(accounts)
        });
    }
    async function btcSign(){
        try {
            let accounts = await window.wizz.requestAccounts();
            console.log("account:" , accounts[0])
        } catch (e) {
            let res = await window.wizz.getAccounts();
            console.log("account:" , res)
        }
        let pubkey = await window.wizz.getPublicKey();
        console.log("pubkey:",pubkey)
        try {
            let res = await window.wizz.signMessage("Sign in to this forum, your data is secure!");
            console.log(res)
            $.post("./index.php?action=btcsign",{sign:res,pubkey:pubkey},function(result){
                console.log(result)
                if (result.status != 0){
                    window.location.reload();
                }else{
                    alert(result.error)
                }
            });
        } catch (e) {
            console.log(e);
        }
    }

    function doSign(accounts){
        currentProvider = web3.currentProvider;
        web3 = new Web3(currentProvider);
        // web3.setProvider(currentProvider);
        //如果用户同意了登录请求，你就可以拿到用户的账号
        web3.eth.defaultAccount = accounts[0];
        let rightnow = (Date.now() / 1000).toFixed(0)
        let sortanow = rightnow - (rightnow % 600)
        console.log('Signning in to firedao' + 'at' + sortanow, web3.eth.defaultAccount);
        web3.eth.personal.sign('Signning in to firedao' + 'at' + sortanow, web3.eth.defaultAccount, "test password!").then(
            function(data){
                $.post("./index.php?action=sign",{sign:data,address:web3.eth.defaultAccount},function(result){
                    console.log(result)
                    if (result.status != 0){
                        window.location.reload();
                    }else{
                        alert(result.error)
                    }
                });
            }
        )
    }
    // if (smf_member_id == 0) {
    //     ethereum.enable()
    //         .catch(function(reason) {
    //             //如果用户拒绝了登录请求
    //             if (reason === "User rejected provider access") {
    //                 // 用户拒绝登录后执行语句；
    //             } else {
    //                 // 本不该执行到这里，但是真到这里了，说明发生了意外
    //                 Message.warning("There was a problem signing you in");
    //             }
    //         }).then(function(accounts) {
    //         // 判断是否连接以太
    //         // if (ethereum.networkVersion !== desiredNetwork) {}
    //         doSign(accounts)
    //     });
    // }
    if(typeof ethereum!="undefined"){
        ethereum.on('accountsChanged', function (accounts) {
            if (smf_member_id != 0) {
                window.location.href = smf_scripturl + '?action=logout;' + smf_session_var + '=' + smf_session_id + ';u=' + smf_member_id
            }
        })
    }

$(document).ready(function() {
    // let resData = {};
    $('.wh-board').on('change', function() {
        var selectedValue = $(this).val();
        var currentSelectId = $(this).attr('id'); // Get the id of the current select
        var nextSelectId = 'select' + (parseInt(currentSelectId.replace('select', '')) + 1);

        if (selectedValue) {
            // Make an AJAX request
            $.ajax({
                url: '/index.php?action=flm;sa=sendRcpData', // Replace with your API endpoint
                type: 'GET',
                data: { id: selectedValue },
                success: function(response) {

                    response = JSON.parse(response);
                    // resData = response.users;
                    console.log('API response:', response); // Debug: log the response
                    // Clear the second select
                    $('#' + nextSelectId).empty();


                    // Add a default option
                    $('#' + nextSelectId).append('<option value="">--Select--</option>');

                    // Populate with new options
                    $.each(response.select, function(index, item) {
                        $('#' + nextSelectId).append('<option value="board-' + item.id_board + '">' + item.name + '</option>');
                    });
                    // $.each(response.users, function(index, item) {
                    //     $('#selUser').append('<option value="user-">' + item.username + '</option>');
                    // });
                    const userSelect = document.getElementById('selUser');
                    const topicSelect = document.getElementById('topic-select');
                    userSelect.empty();
                    topicSelect.empty();
                    // Populate the first select with usernames
                    response.users.forEach(user => {
                        const option = document.createElement('option');
                        option.value = user.username;
                        option.textContent = user.username;
                        userSelect.appendChild(option);
                    });

                    // Event listener for user selection change
                    userSelect.addEventListener('change', () => {
                        const selectedUser = userSelect.value;

                        // Clear the topic select
                        topicSelect.innerHTML = '<option value="">--Select a Topic--</option>';

                        if (selectedUser) {
                            // Find the user's topics and populate the second select
                            const user = response.users.find(u => u.username === selectedUser);
                            if (user) {
                                user.topics.forEach(topic => {
                                    const option = document.createElement('option');
                                    option.value = topic.id_topic;
                                    option.textContent = topic.title;
                                    topicSelect.appendChild(option);
                                });
                            }
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        } else {
            // Clear the second select if no value is selected
            $('#' + nextSelectId).empty().append('<option value="">--Select--</option>');
        }
    });
});

// })
