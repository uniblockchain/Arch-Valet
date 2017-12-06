document.addEventListener('deviceready', onDeviceReady, false);

function onDeviceReady(){

 var d = new Date();
 var todayDate = ((d.getDate() < 9) ? '0'+d.getDate() : d.getDate())+'-'+d.getMonth()+'-'+d.getFullYear();

 var push = PushNotification.init({
  android: {
    senderID: "417788038101"
  },
  browser: {
    pushServiceURL: 'http://push.api.phonegap.com/v1/push'
  },
  ios: {
    alert: "true",
    badge: "true",
    sound: "true"
  },
  windows: {}
});

 push.on('registration', function(data) {
     alert(data.registrationId);
    localStorage.setItem("device_token", data.registrationId);
    localStorage.setItem("platform", 'android');


  });

 push.on('notification', function(data) {
  // alert(JSON.stringify(data));
    // data.message,
    // data.title,
    // data.count,
    // data.sound,
    // data.image,
    // data.additionalData

   

  });

 push.on('error', function(e) {
    // e.message
  });

}
//623cc398064d9e5bc972918fcb0fe16cb9ce1e4a148e8b9703b928f5c5e8bdf2
