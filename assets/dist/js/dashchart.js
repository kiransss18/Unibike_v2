Chart.plugins.register(ChartDataLabels);

const allMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
let currentYear = document.getElementById('tahunPilih').value;
let rentsDataPerMonth = [];

const ctx1 = document.getElementById('rents-chart-canvas').getContext('2d');
const chart1 = new Chart(ctx1, {
  type: 'line',
  data: {
    labels: allMonths,
    datasets: [{
      label: 'Total Peminjaman',
      data: rentsDataPerMonth,
      borderColor: 'rgb(11, 26, 81)',
      fill: false,
      borderWidth: 2
    }]
  },
  options: {
    responsive: true,
    title: {
      display: false,
      text: 'Total Peminjaman'
    },
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    },
  }
});

function changeTahun() {
  currentYear = document.getElementById('tahunPilih').value;
  updateChart();
}

function updateChart() {
  const filteredRentsData = rentsData.filter(row => {
    const date = new Date(row.waktu_kembali);
    return date.getFullYear() === parseInt(currentYear);
  });

  rentsDataPerMonth = allMonths.map(month => {
    const count = filteredRentsData.reduce((acc, row) => {
      const date = new Date(row.waktu_kembali);
      const monthName = date.toLocaleString('default', { month: 'short' });
      if (monthName === month) {
        return acc + 1;
      }
      return acc;
    }, 0);
    return count;
  });

  chart1.data.datasets[0].data = rentsDataPerMonth;
  chart1.update();
}

updateChart();


const faklabels = ['FEB', 'FH', 'FKIP', 'FP', 'FT', 'FISIP', 'FMIPA', 'FK', 'Pascasarjana'];
const fakdata = usersData.reduce((acc, row) => {
  const fakultas = row.fakultas;
  acc[fakultas] = (acc[fakultas] || 0) + 1;
  return acc;
}, {});

const totalUsers = usersData.length;
const fakdataArray = faklabels.map(label => {
  const count = fakdata[label] || 0;
  return (count / totalUsers) * 100;
});

const ctx2 = document.getElementById('user-chart-canvas').getContext('2d');
const chart2 = new Chart(ctx2, {
  type: 'pie',
  data: {
    labels: faklabels,
    datasets: [{
      label: 'Pengguna',
      data: fakdataArray,
      backgroundColor: [
        'rgb(128, 128, 128)',
        'rgb(255, 0, 0)',
        'rgb(128, 0, 128)',
        'rgb(0, 128, 0)',
        'rgb(0, 0, 139)',
        'rgb(255, 165, 0)',
        'rgb(0, 0, 128)',
        'rgb(0, 100, 0)',
        'rgb(139, 0, 0)'
      ],
      borderWidth: 1
    }]
  }, 

  options: {
    responsive: true,
    legend: {
      display: false
    },
    plugins: {
      datalabels: {
        display: true,
        offset: 10,
        formatter: (value, ctx) => {
          if (value > 0) {
            return `${ctx.chart.data.labels[ctx.dataIndex]}: \n${value.toFixed(1)}%`;
          } else {
            return '';
          }
        },
        font: {
          size: 14,
        },
        color: '#FFFFFF',
        textAlign: 'center'
      }
    }
  }
});

const shelterlabels = [
  { id: 1, name: 'Shuttle Bis' },
  { id: 2, name: 'FMIPA' },
  { id: 3, name: 'FKIP' },
  { id: 4, name: 'FK' },
  { id: 5, name: 'FP' },
  { id: 6, name: 'FH' },
  { id: 7, name: 'Rektorat' },
  { id: 8, name: 'FEB/FISIP' },
  { id: 9, name: 'FT' },
  { id: 10, name: 'Kandang Rusa' },
  { id: 11, name: 'Student Corner' },
  { id: 12, name: 'GSG' },
  { id: 13, name: 'Gerbang Bypass' },
  { id: 14, name: 'Embung Rusunawa' },
  { id: 15, name: 'Rusunawa' }
];

const shelterdata = shelterData.reduce((acc, row) => {
  const shelter_pinjam = row.shelter_pinjam;
  acc[shelter_pinjam] = (acc[shelter_pinjam] || 0) + 1;
  return acc;
}, {});

const totalRents = shelterData.length;
const shelterdataArray = shelterlabels.map(label => {
  const count = shelterdata[label.id] || 0;
  return (count / totalRents) * 100;
});

const ctx3 = document.getElementById('shelter-chart-canvas').getContext('2d');
const chart3 = new Chart(ctx3, {
  type: 'doughnut',
  data: {
    labels: shelterlabels.map(label => label.name),
    datasets: [{
      label: 'shelter',
      data: shelterdataArray,
      backgroundColor: [
        'rgb(11, 26, 81)',
        'rgb(0, 0, 128)',
        'rgb(128, 0, 128)',
        'rgb(0, 100, 0)',
        'rgb(0, 128, 0)',
        'rgb(255, 0, 0)',
        'rgb(41, 86, 171)',
        'rgb(255, 165, 0)',
        'rgb(0, 0, 139)',
        'rgb(56, 116, 216)',
        'rgb(61, 126, 231)',
        'rgb(66, 136, 246)',
        'rgb(71, 146, 261)',
        'rgb(76, 156, 276)',
        'rgb(81, 166, 291)'
      ],
      borderWidth: 1
    }]
  }, 

  options: {
    responsive: true,
    legend: {
      display: false
    },
    plugins: {
      datalabels: {
        display: true,
        offset: 10,
        formatter: (value, ctx) => {
          if (value > 0) {
            return `${ctx.chart.data.labels[ctx.dataIndex]}: \n${value.toFixed(1)}%`;
          } else {
            return '';
          }
        },
        font: {
          size: 10,
        },
        color: '#FFFFFF',
        textAlign: 'center'
      }
    }
  }
});