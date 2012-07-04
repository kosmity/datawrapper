<?php


function getDemoDatasets() {
    $datasets = array();
    $datasets[] = array(
        'id' => 'social-protection',
        'title' => _(' Expenditure on social protection - % of GDP'),
        'data' => '	1998	1999	2000	2001	2002	2003	2004	2005	2006	2007	2008	2009
Germany	29.1	29.5	29.6	29.7	30.3	30.7	30.1	30.0	28.9	27.8	28.0	31.4
Greece	21.7	22.7	23.5	24.3	24.0	23.5	23.6	24.9	24.7	24.8	26.3	28.0
Spain	20.2	19.8	20.0	19.7	20.0	20.3	20.3	20.6	20.5	20.7	22.1	25.0
France	30.1	29.9	29.5	29.6	30.5	31.0	31.4	31.5	30.9	30.6	31.0	33.1
Italy	24.6	24.8	24.7	24.9	25.3	25.8	26.0	26.4	26.6	26.7	27.8	29.8
United Kingdom	26.3	25.7	26.4	26.8	25.7	25.7	25.9	26.3	26.0	23.3	26.3	29.2
'
    );
    $datasets[] = array(
        'id' => 'gini',
        'title' => _('Gini coefficient in Germany, Sweden and South Africa (2005)'),
        'data' => "	Gini coef.
Sweden 	0,23
Sachsen 	0,24
Germany	0,29
Hamburg	0,32
Johannesburg	0,73
"
    );
    $datasets[] = array(
        'id' => 'gini-evolution',
        'title' => _('Evolution of the Gini coefficient in Germany, France and Greece at 5-year intervals, 1995-2010.'),
        'data' => "	1995	2000	2005	2010
Germany	29	25	28	29
France	29	28	28	30
Greece	35	33	33	33
"
    );
    $datasets[] = array(
        'id' => 'median-income',
        'title' => _('Median income according to education status in Germany, 2005-2010.'),
        'data' => "	2005	2006	2007	2008	2009	2010
Up to secondary education	15369	14984	15236	15960	15745	15298
Up to tertiary education	17293	17370	18059	18639	18952	19228
Tertiary education	21147	21599	22623	23514	24660	24823
"
    );
    $datasets[] = array(
        'id' => 'income-dist',
        'title' => _('Income distribution in Germany in the 1990\'s.'),
        'data' => "	Share of income
1st quintile	3,76
2nd quintile	10,72
3rd quintile	15,9
4th quintile	22,62
5th quintile	47
"
    );
    $datasets[] = array(
        'id' => 'gini-europe',
        'title' => _('Gini coefficient in Europe, 2001-2010'),
        'data' => "	2001	2002	2003	2004	2005	2006	2007	2008	2009	2010
European Union					30,6	30,2	30,6	30,7	30,4	30,4
Belgium	28		28,3	26,1	28,0	27,8	26,3	27,5	26,4	26,6
Bulgaria	26	26	24	26	25	31,2	35,3	35,9	33,4	33,2
Czech Republic	25				26,0	25,3	25,3	24,7	25,1	24,9
Denmark	22		24,8	23,9	23,9	23,7	25,2	25,1	26,9	26,9
Germany	25				26,1	26,8	30,4	30,2	29,1	29,3
Estonia	35	35	34	37,4	34,1	33,1	33,4	30,9	31,4	31,3
Ireland	29		30,6	31,5	31,9	31,9	31,3	29,9	28,8	
Greece	33		34,7	33,0	33,2	34,3	34,3	33,4	33,1	32,9
Spain	33	31	31	30,7	31,8	31,2	31,3	31,3	32,3	33,9
France	27	27	27	28,2	27,7	27,3	26,6	29,2	29,8	29,9
Italy	29			33,2	32,8	32,1	32,3	31,0	31,5	31,2
Cyprus			27		28,7	28,8	29,8	28,0	28,4	
Latvia					36,1	39,2	35,4	37,7	37,4	36,1
Lithuania	31				36,3	35,0	33,8	34,0	35,5	36,9
Luxembourg	27		27,6	26,5	26,5	27,8	27,4	27,7	29,2	27,9
Hungary	25	24	27		27,6	33,3	25,6	25,2	24,7	24,1
Malta					26,9	27,0	26,3	27,9	27,2	28,4
Netherlands	27	27	27		26,9	26,4	27,6	27,6	27,2	25,5
Austria	24		27,4	25,8	26,2	25,3	26,2	26,2	25,7	26,1
Poland	30				35,6	33,3	32,2	32,0	31,4	31,1
Portugal	37			37,8	38,1	37,7	36,8	35,8	35,4	33,7
Romania	30	30	30	31	31	33	37,8	36,0	34,9	33,3
Slovenia	22	22	22		23,8	23,7	23,2	23,4	22,7	23,8
Slovakia					26,2	28,1	24,5	23,7	24,8	25,9
Finland	27	26	26	25,5	26,0	25,9	26,2	26,3	25,9	25,4
Sweden	24	23		23,0	23,4	24,0	23,4	24,0	24,8	24,1
United Kingdom	35	35	34		34,6	32,5	32,6	33,9	32,4	33,0
Iceland				24,1	25,1	26,3	28,0	27,3	29,6	25,7
Norway			26,6	25,2	28,2	29,2	23,7	25,1	24,1	23,6
Switzerland								32,0	30,2	29,5
Croatia			29	30	30	28	29	28	27	31,5
Turkey		46	45	0		44,8				
"
    );
    $datasets[] = array(
        "id" => "sunspots",
        "title" => _("Yearly number of sunspots, 1700-1988"),
        "data" => "Year	Sunspots
1700	5
1701	11
1702	16
1703	23
1704	36
1705	58
1706	29
1707	20
1708	10
1709	8
1710	3
1711	0
1712	0
1713	2
1714	11
1715	27
1716	47
1717	63
1718	60
1719	39
1720	28
1721	26
1722	22
1723	11
1724	21
1725	40
1726	78
1727	122
1728	103
1729	73
1730	47
1731	35
1732	11
1733	5
1734	16
1735	34
1736	70
1737	81
1738	111
1739	101
1740	73
1741	40
1742	20
1743	16
1744	5
1745	11
1746	22
1747	40
1748	60
1749	80.9
1750	83.4
1751	47.7
1752	47.8
1753	30.7
1754	12.2
1755	9.6
1756	10.2
1757	32.4
1758	47.6
1759	54
1760	62.9
1761	85.9
1762	61.2
1763	45.1
1764	36.4
1765	20.9
1766	11.4
1767	37.8
1768	69.8
1769	106.1
1770	100.8
1771	81.6
1772	66.5
1773	34.8
1774	30.6
1775	7
1776	19.8
1777	92.5
1778	154.4
1779	125.9
1780	84.8
1781	68.1
1782	38.5
1783	22.8
1784	10.2
1785	24.1
1786	82.9
1787	132
1788	130.9
1789	118.1
1790	89.9
1791	66.6
1792	60
1793	46.9
1794	41
1795	21.3
1796	16
1797	6.4
1798	4.1
1799	6.8
1800	14.5
1801	34
1802	45
1803	43.1
1804	47.5
1805	42.2
1806	28.1
1807	10.1
1808	8.1
1809	2.5
1810	0
1811	1.4
1812	5
1813	12.2
1814	13.9
1815	35.4
1816	45.8
1817	41.1
1818	30.1
1819	23.9
1820	15.6
1821	6.6
1822	4
1823	1.8
1824	8.5
1825	16.6
1826	36.3
1827	49.6
1828	64.2
1829	67
1830	70.9
1831	47.8
1832	27.5
1833	8.5
1834	13.2
1835	56.9
1836	121.5
1837	138.3
1838	103.2
1839	85.7
1840	64.6
1841	36.7
1842	24.2
1843	10.7
1844	15
1845	40.1
1846	61.5
1847	98.5
1848	124.7
1849	96.3
1850	66.6
1851	64.5
1852	54.1
1853	39
1854	20.6
1855	6.7
1856	4.3
1857	22.7
1858	54.8
1859	93.8
1860	95.8
1861	77.2
1862	59.1
1863	44
1864	47
1865	30.5
1866	16.3
1867	7.3
1868	37.6
1869	74
1870	139
1871	111.2
1872	101.6
1873	66.2
1874	44.7
1875	17
1876	11.3
1877	12.4
1878	3.4
1879	6
1880	32.3
1881	54.3
1882	59.7
1883	63.7
1884	63.5
1885	52.2
1886	25.4
1887	13.1
1888	6.8
1889	6.3
1890	7.1
1891	35.6
1892	73
1893	85.1
1894	78
1895	64
1896	41.8
1897	26.2
1898	26.7
1899	12.1
1900	9.5
1901	2.7
1902	5
1903	24.4
1904	42
1905	63.5
1906	53.8
1907	62
1908	48.5
1909	43.9
1910	18.6
1911	5.7
1912	3.6
1913	1.4
1914	9.6
1915	47.4
1916	57.1
1917	103.9
1918	80.6
1919	63.6
1920	37.6
1921	26.1
1922	14.2
1923	5.8
1924	16.7
1925	44.3
1926	63.9
1927	69
1928	77.8
1929	64.9
1930	35.7
1931	21.2
1932	11.1
1933	5.7
1934	8.7
1935	36.1
1936	79.7
1937	114.4
1938	109.6
1939	88.8
1940	67.8
1941	47.5
1942	30.6
1943	16.3
1944	9.6
1945	33.2
1946	92.6
1947	151.6
1948	136.3
1949	134.7
1950	83.9
1951	69.4
1952	31.5
1953	13.9
1954	4.4
1955	38
1956	141.7
1957	190.2
1958	184.8
1959	159
1960	112.3
1961	53.9
1962	37.5
1963	27.9
1964	10.2
1965	15.1
1966	47
1967	93.8
1968	105.9
1969	105.5
1970	104.5
1971	66.6
1972	68.9
1973	38
1974	34.5
1975	15.5
1976	12.6
1977	27.5
1978	92.5
1979	155.4
1980	154.7
1981	140.5
1982	115.9
1983	66.6
1984	45.9
1985	17.9
1986	13.4
1987	29.2
1988	100.2
"
    );
    $datasets[] = array(
        "id" => "german-energy-mix",
        'title' => _('Energy consumption by source in Germany, 1950-2010'),
        "data" => "Jahr	Braunkohle	Steinkohle	Mineralöl	Erdgas	Kernenergie	Erneuerbare	Sonstiges
1950	66.94	103.27	6.30	0.09	0.00	6.43	3.59
1951	70.87	116.21	7.19	0.11	0.00	6.29	3.32
1952	74.24	123.61	8.02	0.13	0.00	6.49	3.02
1953	77.90	119.47	9.77	0.17	0.00	5.79	2.78
1954	82.51	125.94	12.71	0.23	0.00	6.37	2.83
1955	86.48	137.51	16.39	0.42	0.00	6.50	2.57
1956	89.95	144.19	21.01	0.61	0.00	6.66	2.35
1957	93.15	143.64	23.00	0.64	0.00	6.03	2.32
1958	95.47	131.55	29.78	0.67	0.00	6.85	2.09
1959	97.39	128.95	37.39	0.79	0.00	5.99	2.25
1960	100.80	135.80	46.79	0.92	0.00	7.22	1.80
1961	101.70	131.17	57.01	1.07	0.03	7.05	1.55
1962	103.82	133.27	70.94	1.34	0.07	6.21	1.60
1963	106.29	135.27	85.96	1.81	0.07	5.73	1.70
1964	107.47	130.54	99.63	2.63	0.11	4.93	1.83
1965	105.24	123.51	115.22	3.60	0.14	7.13	1.79
1966	104.03	111.62	130.26	4.34	0.21	8.60	1.78
1967	103.66	106.40	136.76	5.75	0.56	8.16	1.65
1968	105.49	108.16	153.13	9.46	0.77	8.04	1.66
1969	107.14	112.17	172.39	13.37	1.88	6.78	1.56
1970	108.84	107.19	192.86	18.77	2.31	8.75	2.11
1971	106.09	100.23	200.81	24.95	2.19	6.74	2.29
1972	106.32	93.29	213.46	32.41	3.28	8.63	2.37
1973	107.82	93.97	227.78	42.04	4.05	8.86	2.31
1974	107.60	91.70	208.17	52.79	5.03	8.01	2.33
1975	108.45	74.75	202.24	56.01	8.20	8.15	2.30
1976	112.85	78.79	218.61	59.10	10.07	4.71	2.43
1977	111.59	75.03	218.11	62.39	13.98	7.60	2.42
1978	112.59	77.31	228.55	68.03	15.09	7.01	2.55
1979	114.29	84.89	231.72	74.15	17.98	6.45	2.59
1980	115.64	85.22	206.72	73.90	19.23	8.25	2.90
1981	118.91	84.48	187.74	70.60	22.55	9.37	3.26
1982	118.49	82.62	177.07	65.54	25.30	8.63	3.53
1983	119.92	82.62	174.35	68.12	26.49	9.61	3.88
1984	125.08	84.18	171.50	71.15	35.04	7.00	4.44
1985	125.81	85.69	174.52	70.31	46.19	6.02	4.48
1986	123.53	83.87	181.94	71.24	43.02	7.58	4.36
1987	121.74	82.56	180.75	77.14	46.54	8.73	4.49
1988	120.68	80.59	180.70	74.80	51.57	6.73	4.88
1989	120.21	78.70	171.08	77.49	53.01	5.79	4.82
1990	109.21	78.69	178.00	78.23	56.90	6.69	0.85
1991	85.54	79.50	188.50	82.20	54.89	6.73	1.13
1992	74.26	74.92	191.48	81.27	59.13	7.07	0.46
1993	67.65	72.97	195.56	86.00	57.15	7.77	1.14
1994	63.51	73.01	193.84	87.57	56.30	8.62	1.15
1995	59.18	70.28	194.11	95.49	57.39	9.37	1.05
1996	57.59	71.31	198.18	106.85	60.19	9.21	0.19
1997	54.44	70.46	196.30	102.08	63.43	11.75	0.17
1998	51.66	70.25	197.05	103.01	60.20	12.94	0.33
1999	50.25	67.12	191.03	102.71	63.31	13.76	0.53
2000	52.89	68.97	187.62	101.86	63.16	14.21	2.65
2001	55.72	66.49	190.29	107.42	63.75	14.75	2.43
2002	56.74	65.74	183.62	107.25	61.35	15.54	2.03
2003	55.93	68.57	180.37	108.55	61.44	19.14	4.15
2004	56.23	65.14	177.91	109.10	62.18	22.18	5.13
2005	54.45	61.68	176.26	110.17	60.69	26.25	6.53
2006	53.76	67.02	174.72	111.27	62.29	32.03	3.41
2007	55.03	68.82	157.84	106.51	52.31	38.10	3.43
2008	53.04	61.42	167.31	104.35	55.38	39.14	4.43
2009	51.42	51.06	158.16	100.21	50.22	40.98	6.14
2010	51.52	57.80	161.29	104.51	52.27	45.04	7.20
"
    );
    return $datasets;
}
