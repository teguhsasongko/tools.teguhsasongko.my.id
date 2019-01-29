<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Color Remixer</title>
  
  
  
      <style type="text/css">
      	@import url("https://fonts.googleapis.com/css?family=Ubuntu");
*, *::before, *::after {
  box-sizing: border-box;
}

body {
  margin: 40px;
  font: 18px 'Ubuntu', sans-serif;
}

a {
  color: #c2255c;
  font-weight: bold;
  text-decoration: none;
}

#app {
  display: flex;
  max-width: 750px;
  margin: 0 auto;
}

.controls {
  flex: 1 1 50%;
  margin-right: 10px;
}
.controls section:not(:first-child) {
  margin-top: 40px;
}

.control {
  margin-bottom: 7px;
}
.control label {
  display: inline-block;
  font-weight: bold;
  margin-bottom: 5px;
}
.control [for="red"] {
  color: red;
}
.control [for="green"] {
  color: green;
}
.control [for="blue"] {
  color: blue;
}

.control-inputs {
  display: flex;
  align-items: center;
}

.control-range {
  flex: 1;
}

.control-number {
  width: 60px;
  margin-left: 10px;
  text-align: right;
  font-size: inherit;
  font-family: inherit;
}

.control-unit {
  margin-left: 3px;
  width: 20px;
}

.outputs {
  flex: 1 1 40%;
}

.color-box {
  height: 300px;
  border-radius: 10px;
  background-color: #ccc;
}

.styles {
  margin-top: 20px;
  line-height: 1.3;
}

      </style>


  
</head>

<body>

<center><h3 style="color:white;padding:2px;background:#5997f9;margin-top:0px;border:2px dashed white;">Color Remixer</h3></center>
  <div id="app">
  <div class="controls">
    <section>
      <control-widget
        label="Red" value-key="red" min="0" max="255"
        :initial-value="values.red" @update="updateValue">
      </control-widget>

      <control-widget
        label="Green" value-key="green" min="0" max="255"
        :initial-value="values.green" @update="updateValue">
      </control-widget>

      <control-widget
        label="Blue" value-key="blue" min="0" max="255"
        :initial-value="values.blue" @update="updateValue">
      </control-widget>
    </section>
    <section>
      <control-widget
        label="Hue Rotate" value-key="hueRotate" min="0" max="360"
        :initial-value="values.hueRotate" @update="updateValue">
      </control-widget>

      <control-widget
        label="Brightness" value-key="brightness" min="0" max="200"
        :initial-value="values.brightness" @update="updateValue">
      </control-widget>

      <control-widget
        label="Contrast" value-key="contrast" min="0" max="200"
        :initial-value="values.contrast" @update="updateValue">
      </control-widget>

      <control-widget
        label="Saturate" value-key="saturate" min="0" max="200"
        :initial-value="values.saturate" @update="updateValue">
      </control-widget>

      <control-widget
        label="Invert" value-key="invert" min="0" max="100"
        :initial-value="values.invert" @update="updateValue">
      </control-widget>
</section>
  </div>
  <div class="outputs">
    <div class="color-box" :style="styleObject"></div>
    <div class="styles">
      {{this.styleBackgroundColor}}
      <br>
      {{this.styleFilter}}
      <br>
    </div>
  </div>
</div>

<script type="text/x-template" id="control-widget-template">
	<div class="control">
  	<label :for="valueKey">{{label}}</label>
    <div class="control-inputs">
	  	<input type="range" class="control-range" :min="min" :max="max" v-model="number">
  		<input type="number" class="control-number" :id="valueKey" :min="min" :max="max" v-model="number">
   	 	<div class="control-unit">{{unit}}</div>
  	</div>
  </div>
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>

  

    <script>
    	Vue.component('control-widget', {
  template: '#control-widget-template',
  props: ['label', 'valueKey', 'initialValue', 'min', 'max'],
  
  data() {
    return {
      number: 0,
      unit: ''
    }
  },
  computed: {
    value() {
      return (this.number || 0) + this.unit;
    }
  },
  watch: {
    value() {
      this.$emit('update', this.valueKey, this.value);
    }
  },
  created() {
    // parse an inital value like "50%" to get 50 and "%"
    let parsedInitialValue = this.initialValue.toString().match(/(\d+)(\D*)/);
    if (parsedInitialValue && parsedInitialValue.length === 3) {
      this.number = +parsedInitialValue[1];
      this.unit = parsedInitialValue[2]
    }
  }
});

new Vue({
  el: '#app',
  data: {
    values: {
      red: '194',
      green: '37',
      blue: '92',
      hueRotate: '0deg',
      brightness: '100%',
      contrast: '100%',
      saturate: '100%',
      invert: '0%'
    },
  },
  computed: {
    styleObject() {
      let filters = [];
      this.appendFilterPart(filters, 'hue-rotate', this.values.hueRotate, '0deg');
      this.appendFilterPart(filters, 'brightness', this.values.brightness, '100%');
      this.appendFilterPart(filters, 'contrast', this.values.contrast, '100%');
      this.appendFilterPart(filters, 'saturate', this.values.saturate, '100%');
      this.appendFilterPart(filters, 'invert', this.values.invert, '0%');
      
      return {
        backgroundColor: 'rgb(' +
          this.values.red + ', ' +
          this.values.green + ', ' +
          this.values.blue +
        ')',
        filter: filters.join(' ')
      };
    },
    styleBackgroundColor() {
      return 'background-color: ' + this.styleObject.backgroundColor + ';';
    },
    styleFilter() {
      return 'filter: ' + (this.styleObject.filter || 'none') + ';';
    }
  },
  methods: {
    updateValue: function(valueKey, value) {
      this.values[valueKey] = value;
    },
    appendFilterPart(filters, filterName, value, ignoreValue) {
      if (value !== ignoreValue) {
        filters.push(filterName + '(' + value + ')');
      }
    }
  }
});
    </script>




</body>

</html>
