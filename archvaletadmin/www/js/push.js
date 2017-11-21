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
     //alert(data.registrationId);
    localStorage.setItem("device_token", data.registrationId);
    localStorage.setItem("platform", 'android');


  });

 push.on('notification', function(data) {
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
