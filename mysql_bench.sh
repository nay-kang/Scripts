sysbench --test=oltp --oltp-table-size=1000000 --mysql-db=test --mysql-user=root --mysql-password='root' --mysql-host=127.0.0.1 prepare

sysbench --test=oltp --oltp-table-size=1000000  --max-time=300 --oltp-read-only=off --max-requests=0 --num-threads=8 --mysql-db=test --mysql-user=root --mysql-password='root' --mysql-host=127.0.0.1 run

sysbench --test=oltp --mysql-db=test --mysql-user=root --mysql-password='root' --mysql-host=127.0.0.1  cleanup
