<?php
/*
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//
// Class: DHCPOption
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOption' => 'DHCP Option',
	'Class:DHCPOption+' => '',
	'Class:DHCPOption/Attribute:name' => 'Nombre',
	'Class:DHCPOption/Attribute:name+' => '',
	'Class:DHCPOption/Attribute:isc_name' => 'ISC name',
	'Class:DHCPOption/Attribute:isc_name+' => '',
	'Class:DHCPOption/Attribute:code' => 'Code',
	'Class:DHCPOption/Attribute:code+' => '',
	'Class:DHCPOption/Attribute:dhcpv4' => 'DHCPv4',
	'Class:DHCPOption/Attribute:dhcpv4+' => '',
	'Class:DHCPOption/Attribute:dhcpv4/Value:yes' => 'Si',
	'Class:DHCPOption/Attribute:dhcpv4/Value:no' => 'No',
	'Class:DHCPOption/Attribute:type' => 'Type',
	'Class:DHCPOption/Attribute:type+' => '',
	'Class:DHCPOption/Attribute:description' => 'Descripción',
	'Class:DHCPOption/Attribute:description+' => '',
	'Class:DHCPOption/Attribute:value' => 'Value',
	'Class:DHCPOption/Attribute:value+' => '',
	'Class:DHCPOption/Attribute:org_id' => 'Organización',
	'Class:DHCPOption/Attribute:org_id+' => '',
	'Class:DHCPOption/Attribute:org_name' => 'Nombre de la Organización',
	'Class:DHCPOption/Attribute:org_name+' => '',
));

//
// Class: DHCPOptionGlobal
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionGlobal/Name' => '%1$s',
	'Class:DHCPOptionGlobal' => 'Global DHCP Option',
	'Class:DHCPOptionGlobal+' => 'DHCP option for global scope',
	'DHCPOptionGlobal:General' => 'Atributos DHCP',
	'DHCPOptionGlobal:Scope' => 'Alcance',
));

//
// Class: DHCPOptionSharedNetwork
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionSharedNetwork/Name' => '%1$s',
	'Class:DHCPOptionSharedNetwork' => 'Shared Network DHCP Option',
	'Class:DHCPOptionSharedNetwork+' => 'DHCP option for shared network scope',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id' => 'VLAN',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_id+' => '',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag' => 'VLAN Tag',
	'Class:DHCPOptionSharedNetwork/Attribute:vlan_tag+' => '',
	'DHCPOptionSharedNetwork:General' => 'DHCP Attributes',
	'DHCPOptionSharedNetwork:Scope' => 'Scope',
));

//
// Class: DHCPOptionSubnet
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionSubnet/Name' => '%1$s',
	'Class:DHCPOptionSubnet' => 'Subnet DHCP Option',
	'Class:DHCPOptionSubnet+' => 'DHCP option for subnet scope',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id' => 'Subnet',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_id+' => '',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name' => 'Subnet name',
	'Class:DHCPOptionSubnet/Attribute:ipsubnet_name+' => '',
	'DHCPOptionSubnet:General' => 'DHCP Attributes',
	'DHCPOptionSubnet:Scope' => 'Scope',
));

//
// Class: DHCPOptionPool
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionPool/Name' => '%1$s',
	'Class:DHCPOptionPool' => 'Pool DHCP Option',
	'Class:DHCPOptionPool+' => 'DHCP option for pool scope',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall' => 'IP Range Type',
	'Class:DHCPOptionPool/Attribute:iprange_id_finalclass_recall+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_id' => 'IP Range',
	'Class:DHCPOptionPool/Attribute:iprange_id+' => '',
	'Class:DHCPOptionPool/Attribute:iprange_name' => 'IP Range name',
	'Class:DHCPOptionPool/Attribute:iprange_name+' => '',
	'DHCPOptionPool:General' => 'DHCP Attributes',
	'DHCPOptionPool:Scope' => 'Scope',
));

//
// Class: DHCPOptionClass
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionClass/Name' => '%1$s',
	'Class:DHCPOptionClass' => 'Class DHCP Option',
	'Class:DHCPOptionClass+' => 'DHCP option for class scope',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id' => 'Class',
	'Class:DHCPOptionClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name' => 'DHCP Class name',
	'Class:DHCPOptionClass/Attribute:dhcpclass_name+' => '',
	'DHCPOptionClass:General' => 'DHCP Attributes',
	'DHCPOptionClass:Scope' => 'Scope',
));

//
// Class: DHCPOptionSubClass
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionSubClass/Name' => '%1$s',
	'Class:DHCPOptionSubClass' => 'SubClass DHCP Option',
	'Class:DHCPOptionSubClass+' => 'DHCP option for sub-class scope',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id' => 'Class',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name' => 'DHCP Class name',
	'Class:DHCPOptionSubClass/Attribute:dhcpclass_name+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id' => 'SubClass',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_id+' => '',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name' => 'DHCP SubClass name',
	'Class:DHCPOptionSubClass/Attribute:dhcpsubclass_name+' => '',
	'DHCPOptionSubClass:General' => 'DHCP Attributes',
	'DHCPOptionSubClass:Scope' => 'Scope',
));

//
// Class: DHCPOptionHost
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPOptionHost/Name' => '%1$s',
	'Class:DHCPOptionHost' => 'Host DHCP Option',
	'Class:DHCPOptionHost+' => 'DHCP option for host scope',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id' => 'Host',
	'Class:DHCPOptionHost/Attribute:physicaldevice_id+' => '',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name' => 'Host name',
	'Class:DHCPOptionHost/Attribute:physicaldevice_name+' => '',
	'DHCPOptionHost:General' => 'DHCP Attributes',
	'DHCPOptionHost:Scope' => 'Scope',
));

//
// Class: DHCPClass
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPClass/Name' => '%1$s',
	'Class:DHCPClass' => 'DHCP Class',
	'Class:DHCPClass+' => '',
));

//
// Class: DHCPSubClass
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:DHCPSubClass/Name' => '%1$s',
	'Class:DHCPSubClass' => 'DHCP SubClass',
	'Class:DHCPSubClass+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_id' => 'DHCP Class',
	'Class:DHCPSubClass/Attribute:dhcpclass_id+' => '',
	'Class:DHCPSubClass/Attribute:dhcpclass_name' => 'DHCP Class name',
	'Class:DHCPSubClass/Attribute:dhcpclass_name+' => '',
));

//
// Class: PhysicalDevice
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list' => 'Opciones DHCP',
	'Class:PhysicalDevice/Tab:dhcpoptionhosts_list+' => 'List of all DHCP options attached to the Physical Device',
));

//
// Class: IPRange
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:IPRange/Tab:dhcpoptionpools_list' => 'Opciones DHCP',
	'Class:IPRange/Tab:dhcpoptionpools_list+' => 'List of all DHCP options attached to the IP Range',
));

//
// Management of options
//
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Menu:DHCPManagement' => 'Administración de DHCP',
	'Menu:DHCPSpace' => 'Espacio DHCP',
	'Menu:DHCPSpace:Options' => 'Opciones',
	'Menu:DHCPServers' => 'Servidores',
	'Menu:DHCPServers+' => 'List of functional CIs attached to an IP Range as DHCP servers',
	'Menu:DHCPRanges' => 'Rangos',
	'Menu:DHCPRanges+' => 'List of all IP ranges set as DHCP pools',
	'Menu:DHCPOptions' => 'Opciones DHCP',
	'Menu:NewDHCPOption' => 'Nueva Opción',
	'Menu:NewDHCPOption+' => 'New DHCP Option',
	'Menu:SearchDHCPOption' => 'Buscar por Opciones',
	'Menu:SearchDHCPOption+' => 'Search for DHCP Options',
	'Menu:DHCPGlobalOption' => 'Opciones Globales',
	'Menu:DHCPGlobalOption+' => 'DHCP Global options',
	'Menu:DHCPSharedNetworkOption' => 'Redes Compartidas',
	'Menu:DHCPSharedNetworkOption+' => 'DHCP Shared Network options',
	'Menu:DHCPSubnetOption' => 'Subredes',
	'Menu:DHCPSubnetOption+' => 'DHCP Subnet options',
	'Menu:DHCPPoolOption' => 'Pools',
	'Menu:DHCPPoolOption+' => 'DHCP Pool options',
	'Menu:DHCPClassOption' => 'Clases',
	'Menu:DHCPClassOption+' => 'DHCP Class options',
	'Menu:DHCPSubClassOption' => 'Sub Clases',
	'Menu:DHCPSubClassOption+' => 'DHCP Sub Class options',
	'Menu:DHCPHostOption' => 'Hosts',
	'Menu:DHCPHostOption+' => 'DHCP Host options',
));
