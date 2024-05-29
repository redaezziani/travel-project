import ApexCharts from 'apexcharts'

const fetchTrips = async () => {
    try {
        const response = await fetch('/api/trips');
        const data = await response.json();
         
        // Get the count of bookings for each day and each trip
        const bookingCounts = data.reduce((acc, trip) => {
            trip.bookings.forEach(booking => {
                const date = new Date(booking.created_at).toISOString().split('T')[0];
                if (!acc[trip.id]) {
                    acc[trip.id] = { name: `Trip ${trip.id}`, data: [] };
                }
                const existingData = acc[trip.id].data.find(d => d.x === date);
                if (existingData) {
                    existingData.y++;
                } else {
                    acc[trip.id].data.push({ x: date, y: 1 });
                }
            });
            return acc;
        }, {});

        // Convert the booking counts to an array of series
        return Object.values(bookingCounts);
        
    } catch (error) {
        console.error('Error:', error);
    }
}

var TripsOptions = {
    chart: {
        height: 300,
        type: 'line',
        toolbar: {
          show: false
        },
        zoom: {
          enabled: false
        }
      },
      series: [],
      xaxis: {
        type: 'datetime',
        tickPlacement: 'on',
        labels: {
          style: {
            colors: '#9ca3af',
            fontSize: '13px',
            fontWeight: 400
          },
        }
      },
      yaxis: {
        labels: {
          align: 'left',
          minWidth: 0,
          maxWidth: 160,
          style: {
            colors: '#9ca3af',
            fontSize: '13px',
            fontWeight: 400
          },
        }
      },
      responsive: [{
        breakpoint: 568,
        options: {
          chart: {
            height: 300
          },
          xaxis: {
            labels: {
              style: {
                fontSize: '11px',
              },
            }  
          },
          yaxis: {
            labels: {
              style: {
                fontSize: '11px',
              },
            }
          },
        },
      }]
}

const intTripsChart = async () => {
    const bookingCounts = await fetchTrips();
    
    TripsOptions.series = bookingCounts;
    // line stroke width
    TripsOptions.stroke = {
        curve: 'smooth',
        width: 1.5
    }
    var Tripschart = new ApexCharts(document.querySelector('#trips'), TripsOptions)
    Tripschart.render()
}

await intTripsChart();



var UsersOptions = {
    // bar chart
    chart: {
        height: 300,
        type: 'bar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          columnWidth: '45%',
          endingShape: 'rounded',
          colors: {
            ranges: [{
              from: -100,
              to: 0,
              color: '#f44336'
            }, {
              from: 1,
              to: 100,
              color: '#0ea5e9'
            }]
          },
        }
      },
      dataLabels: {
        enabled: false
      },
      series: [
        {
          name: 'Users',
          data: [120, 150, 100, 200, 150, 100, 50, 200, 120, 150, 100, 200]
        }
      ],
      xaxis: {
        categories: [
          '25 January 2023',
          '26 January 2023',
          '27 January 2023',
          '28 January 2023',
          '29 January 2023',
          '30 January 2023',
          '31 January 2023',
          '1 February 2023',
          '2 February 2023',
          '3 February 2023',
          '4 February 2023',
          '5 February 2023'
        ],
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        crosshairs: {
          stroke: {
            dashArray: 0
          },
          dropShadow: {
            show: false
          }
        },
        tooltip: {
          enabled: false
        },
        labels: {
          style: {
            colors: '#9ca3af',
            fontSize: '13px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: 400
          },
          formatter: (title) => {
            let t = title;

            if (t) {
              const newT = t.split(' ');
              t = `${newT[0]} ${newT[1].slice(0, 3)}`;
            }

            return t;
          }
        }
      },
      yaxis: {
        labels: {
          align: 'left',
          minWidth: 0,
          maxWidth: 140,
          style: {
            colors: '#9ca3af',
            fontSize: '13px',
            fontFamily: 'Inter, ui-sans-serif',
            fontWeight: 400
          },
          formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
        }
    },
};

var Userschart = new ApexCharts(document.querySelector('#users'), UsersOptions)
Userschart.render()

