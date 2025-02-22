<!DOCTYPE html>
<html lang = 'fr'>
<head>
    <script src = "https://cdn.jsdelivr.net/npm/vue"></script><link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <link rel = "stylesheet" , href = "assets/escapegame.css">
</head>
<body>
    <div id = "body">
    <p>Hello world!</p>
    <div id = 'map'>
    </div>
    <div id = "inventaire">
        <div v-for="obj in liste_obj">
            <img v-if="selected_object.nom === obj.nom" :src="obj.icone" class = "selected">
            <img v-else :src="obj.icone" @click="setSelection(obj)" class = "notselected">
        </div>
        <div id="popup" ref="popup">
            {{popup_text}}
            <form @submit.prevent="submit_function">
                <input type="number" id="digit1" name="digit1" min="0" max="9" v-model="digit1">
                <input type="number" id="digit2" name="digit2" min="0" max="9" v-model="digit2">
                <input type="number" id="digit3" name="digit3" min="0" max="9" v-model="digit3">
                <input type="number" id="digit4" name="digit4" min="0" max="9" v-model="digit4">

                <input type="submit" name="envoi" value="OK">

            </form>
        </div>
    </div>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <!--<script src="assets/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>-->
    <script src = "assets/escapegame.js"></script>
    </div>
</body>
</html>