import { initializeApp } from "firebase/app";
import { getDatabase, ref, set, child, get } from "firebase/database";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyB9SrojnN6civpIuHwqjKUKt_-qzm3Flo4",
  authDomain: "chat-app-4d692.firebaseapp.com",
  databaseURL: "https://chat-app-4d692-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "chat-app-4d692",
  storageBucket: "chat-app-4d692.appspot.com",
  messagingSenderId: "778979191550",
  appId: "1:778979191550:web:5be3628f01f0e5137893af",
  measurementId: "G-WCQNDNJZKZ"
};

// Initialize Firebase
const firebase = initializeApp(firebaseConfig);
export const database = getDatabase(firebase);
