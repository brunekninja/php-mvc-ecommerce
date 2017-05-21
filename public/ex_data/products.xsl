<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <h2>Products</h2>
    <table border="1">
      <tr bgcolor="#ccc">
        <th style="text-align:left">Number</th>
        <th style="text-align:left">Name</th>
        <th style="text-align:left">Type</th>
      </tr>
      <xsl:for-each select="dataset/record">
        <tr>
          <td><xsl:value-of select="position()"/></td>
          <td><xsl:value-of select="name"/></td>
          <td><xsl:value-of select="type"/></td>
          <td>
            <button class="js-action">
              <xsl:attribute name="data-id">
                <xsl:value-of select="id"/>
              </xsl:attribute>
              Add To Cart
            </button>
          </td>
        </tr>
      </xsl:for-each>
    </table>
  </xsl:template>
</xsl:stylesheet>
