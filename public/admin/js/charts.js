"use strict";

function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
} // #overview-income


(function () {
  var options = {
    grid: {
      strokeDashArray: 0,
      padding: {
        top: -20,
        right: 10,
        bottom: 0,
        left: 0
      }
    },
    legend: {
      show: false
    },
    colors: ["#2A85FF"],
    series: [{
      name: "Earning",
      data: [500, 1600, 1100, 1400, 1700, 2000]
    }],
    chart: {
      height: "100%",
      type: "line",
      toolbar: {
        show: false
      },
      fontFamily: "Inter, sans-serif"
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: "smooth",
      width: 4
    },
    xaxis: {
      type: "category",
      categories: ["Apr", "May", "Jun", "July", "Aug", "Sep"],
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      tooltip: {
        enabled: false
      }
    }
  };
  var chart = document.querySelector("#overview-income");

  if (chart != null) {
    new ApexCharts(chart, options).render();
  }
})(); // #product-views