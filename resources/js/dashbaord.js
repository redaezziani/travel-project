import ApexCharts from 'apexcharts'

var TripsOptions = {
    chart: {
        height: 300,
        type: 'area',
        toolbar: {
          show: false
        },
        zoom: {
          enabled: false
        }
      },
      series: [
        {
          name: 'Income',
          data: [18000, 51000, 60000, 38000, 88000, 50000, 40000, 52000, 88000, 80000, 60000, 70000]
        },
        {
          name: 'Outcome',
          data: [27000, 38000, 60000, 77000, 40000, 50000, 49000, 29000, 42000, 27000, 42000, 50000]
        }
      ],
      legend: {
        show: false
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 2
      },
      grid: {
        strokeDashArray: 2
      },
      fill: {
        type: 'gradient',
        gradient: {
          type: 'vertical',
          shadeIntensity: 1,
          opacityFrom: 0.1,
          opacityTo: 0.8
        }
      },
      xaxis: {
        type: 'category',
        tickPlacement: 'on',
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
      tooltip: {
        x: {
          format: 'MMMM yyyy'
        },
        y: {
          formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
        },
        custom: function (props) {
          const { categories } = props.ctx.opts.xaxis;
          const { dataPointIndex } = props;
          const title = categories[dataPointIndex].split(' ');
          const newTitle = `${title[0]} ${title[1]}`;

          return buildTooltip(props, {
            title: newTitle,
            mode,
            hasTextLabel: true,
            wrapperExtClasses: 'min-w-28',
            labelDivider: ':',
            labelExtClasses: 'ms-2'
          });
        }
      },
      responsive: [{
        breakpoint: 568,
        options: {
          chart: {
            height: 300
          },
          labels: {
            style: {
              colors: '#9ca3af',
              fontSize: '11px',
              fontFamily: 'Inter, ui-sans-serif',
              fontWeight: 400
            },
            offsetX: -2,
            formatter: (title) => title.slice(0, 3)
          },
          yaxis: {
            labels: {
              align: 'left',
              minWidth: 0,
              maxWidth: 140,
              style: {
                colors: '#9ca3af',
                fontSize: '11px',
                fontFamily: 'Inter, ui-sans-serif',
                fontWeight: 400
              },
              formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
            }
          },
        },
      }]
    }

    


var Tripschart = new ApexCharts(document.querySelector('#trips'), TripsOptions)
Tripschart.render()


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
          endingShape: 'rounded'
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

